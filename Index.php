<?php
// PHP logic to handle dynamic content
$pageTitle = "Android Rooting Guide";
$currentYear = date("Y");
$warningMessage = "Warning: Rooting your device voids the warranty and can potentially brick your phone if done incorrectly. Proceed with caution.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        /* MIUI Inspired CSS */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #F7F8FA; /* MIUI light gray background */
            color: #000000;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .container {
            background-color: #FFFFFF;
            max-width: 800px;
            width: 100%;
            padding: 32px;
            border-radius: 28px; /* Large squircle radius typical of MIUI */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); /* Soft, diffused shadow */
            box-sizing: border-box;
        }

        h1 {
            color: #000000;
            font-size: 28px;
            font-weight: 600;
            margin-top: 0;
            margin-bottom: 24px;
            text-align: center;
        }

        h2 {
            color: #000000;
            font-size: 20px;
            font-weight: 600;
            margin-top: 32px;
            margin-bottom: 16px;
        }

        .step-box {
            background-color: #F7F8FA;
            padding: 20px;
            margin-bottom: 16px;
            border-radius: 20px; /* Squircle inner elements */
            transition: transform 0.2s ease;
        }

        .step-box:active {
            transform: scale(0.98); /* MIUI tap feedback */
        }

        .step-box h3 {
            margin-top: 0;
            color: #3385FF; /* MIUI Blue accent */
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .step-box p {
            margin: 0;
            color: #666666;
            font-size: 15px;
        }

        .device-note {
            background-color: #F0F6FF; /* Very light blue */
            padding: 20px;
            border-radius: 20px;
            font-size: 15px;
            color: #3385FF;
            margin-top: 24px;
        }

        .device-note strong {
            color: #005ce6;
        }

        .disclaimer-btn {
            background-color: #FF5A5F; /* MIUI Red for warnings */
            color: #FFFFFF;
            border: none;
            padding: 14px 24px;
            border-radius: 100px; /* Pill shape */
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            width: 100%;
            margin-bottom: 24px;
            box-shadow: 0 4px 12px rgba(255, 90, 95, 0.2);
            transition: background-color 0.2s, transform 0.2s;
        }

        .disclaimer-btn:active {
            background-color: #E0484D;
            transform: scale(0.98);
        }

        #disclaimer-text {
            display: none;
            background-color: #FFF0F0;
            color: #FF5A5F;
            padding: 20px;
            border-radius: 20px;
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 24px;
            text-align: center;
        }

        footer {
            margin-top: 40px;
            text-align: center;
            font-size: 13px;
            color: #999999;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1><?php echo $pageTitle; ?></h1>

        <button class="disclaimer-btn" onclick="toggleDisclaimer()">Show Risk Disclaimer</button>
        
        <div id="disclaimer-text">
            <?php echo $warningMessage; ?>
        </div>

        <p style="color: #666666; font-size: 16px; margin-bottom: 24px;">Rooting is the process of allowing users of Android mobile operating systems to attain privileged control (known as root access) over various Android subsystems. It is similar to running programs as administrators in Windows.</p>

        <h2>The Standard Rooting Process</h2>
        
        <div class="step-box">
            <h3>1. Unlock the Bootloader</h3>
            <p>The bootloader is the software that tells your phone what operating system to run. By default, it is locked to only boot the official software. Unlocking it allows you to flash custom software.</p>
        </div>

        <div class="step-box">
            <h3>2. Flash a Custom Recovery</h3>
            <p>Once the bootloader is unlocked, you replace the stock recovery environment with a custom one, such as TWRP (Team Win Recovery Project). This environment allows you to install modified system files.</p>
        </div>

        <div class="step-box">
            <h3>3. Flash the Root Package (Magisk)</h3>
            <p>Using the custom recovery, you install a rooting manager like Magisk. Magisk modifies the boot image to grant root access to apps that request it while leaving the system partition mostly untouched.</p>
        </div>

        <div class="device-note">
            <strong>Manufacturer Differences:</strong> The exact method depends heavily on the manufacturer. Unlocking the bootloader on Xiaomi devices typically involves binding a Mi Account and waiting for authorization through their official Mi Unlock tool. Modifying a Samsung Galaxy device usually requires using Odin software to flash files, which permanently trips Knox security.
        </div>

        <footer>
            &copy; <?php echo $currentYear; ?> Rooting Informational Guide
        </footer>
    </div>

    <script>
        function toggleDisclaimer() {
            const disclaimer = document.getElementById('disclaimer-text');
            const button = document.querySelector('.disclaimer-btn');
            
            if (disclaimer.style.display === 'none' || disclaimer.style.display === '') {
                disclaimer.style.display = 'block';
                button.innerText = 'Hide Risk Disclaimer';
            } else {
                disclaimer.style.display = 'none';
                button.innerText = 'Show Risk Disclaimer';
            }
        }
    </script>

</body>
</html>
