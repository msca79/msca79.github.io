<?php
session_start();
include '../includes/constants.php'; ?>
<?php
$message = $_SESSION['form_message'] ?? "";
$messageClass = $_SESSION['form_message_class'] ?? "";
$messageSent = $_SESSION['form_message_sent'] ?? "";
$errors = $_SESSION['form_errors'] ?? [];
unset($_SESSION['form_message_sent']);
$formData = $_SESSION['form_data'] ?? [
        'email' => '',
        'gondviselo_neve' => '',
        'gyermek_neve' => '',
        'gyermek_osztalya' => '',
        'keres' => ''
];

// Miután kiolvastuk, töröljük a munkamenetből, hogy frissítésnél ne maradjon ott
unset($_SESSION['form_message'], $_SESSION['form_message_class'], $_SESSION['form_data'], $_SESSION['form_errors']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Adatok összegyűjtése
    $formData['email'] = $_POST['email'] ?? '';
    $formData['gondviselo_neve'] = $_POST['gondviselo_neve'] ?? '';
    $formData['gyermek_neve'] = $_POST['gyermek_neve'] ?? '';
    $formData['gyermek_osztalya'] = $_POST['gyermek_osztalya'] ?? '';
    $formData['keres'] = $_POST['keres'] ?? '';

    // Validáció
    $errors = [];
    if (empty($formData['email'])) $errors['email'] = "Email cím kitöltése kötelező.";
    if (empty($formData['gondviselo_neve'])) $errors['gondviselo_neve'] = "Gondviselő nevének kitöltése kötelező.";
    if (empty($formData['gyermek_neve'])) $errors['gyermek_neve'] = "Gyermek nevének kitöltése kötelező.";
    if (empty($formData['gyermek_osztalya'])) $errors['gyermek_osztalya'] = "Gyermek osztályának kitöltése kötelező.";

    if (empty($errors)) {
        $targy = "Laptop probléma";

        $uzenet = "Új laptop ügyintézés érkezett:\n\n";
        $uzenet .= "Email cím: " . $formData['email'] . "\n";
        $uzenet .= "Gondviselő neve: " . $formData['gondviselo_neve'] . "\n";
        $uzenet .= "Gyermek neve: " . $formData['gyermek_neve'] . "\n";
        $uzenet .= "Osztály: " . $formData['gyermek_osztalya'] . "\n";
        $uzenet .= "Kérése: " . $formData['keres'] . "\n";

        $fejlec = "From: " . $formData['email'] . "\r\n";
        $fejlec .= "Cc: " . $formData['email'] . "\r\n";
        $fejlec .= "Reply-To: " . $formData['email'] . "\r\n";
        $fejlec .= "X-Mailer: PHP/" . phpversion();

        if (mail($laptop_admin_email, $targy, $uzenet, $fejlec)) {
            $_SESSION['form_message'] = "Az üzenet sikeresen elküldve!";
            $_SESSION['form_message_class'] = "text-success";
            $_SESSION['form_message_sent'] = true;
            $_SESSION['form_data'] = $formData;
        } else {
            $_SESSION['form_message'] = "Hiba történt az üzenet küldése közben!";
            $_SESSION['form_message_class'] = "text-danger";
            $_SESSION['form_message_sent'] = false;
            $_SESSION['form_data'] = $formData;
        }
    } else {
        $_SESSION['form_message'] = "Nincs minden szükséges mező megadva!";
        $_SESSION['form_message_class'] = "text-danger";
        $_SESSION['form_message_sent'] = false;
        $_SESSION['form_data'] = $formData;
        $_SESSION['form_errors'] = $errors;
    }

    // Redirect to self to prevent form resubmission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Laptop ügyintézés' . $pageTitlePostfix; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidenav.php'; ?>
<?php include '../includes/banner.php'; ?>
<?php include '../includes/menubar.php'; ?>

    <style>
        .text-success {
            color: green;
        }

        .text-danger {
            color: red;
        }

        .spinner {
            display: none;
            width: 18px;
            height: 18px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
            margin-right: 8px;
            vertical-align: middle;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        button:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        .form-actions {
            display: flex;
            align-items: center;
        }

        .error-message {
            color: red;
            font-size: 0.85em;
            margin-top: 5px;
            display: block;
        }

    </style>

<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
<main id="page-content">
    <section id="sample-page">
          <h1>Laptop ügyintézés</h1>

        <?php if ($message && empty($errors)): ?>
            <span class="message <?php echo $messageClass; ?>" style="margin-left: 10px; font-weight: bold;">
                <?php echo $message; ?>
            </span>
        <?php endif; ?>

        <?php if (!$messageSent): ?>
            <p>
                Ezen az űrlapon jelezheti a laptopjával kapcsolatos problémákat.
            </p>

            <form action="" method="POST" class="standard-form" id="laptop-form" novalidate>
                <div class="form-group">
                    <label for="email">Email cím</label>
                    <input type="email" id="email" name="email" class="form-control"
                           value="<?php echo htmlspecialchars($formData['email']); ?>" required>
                    <?php if (isset($errors['email'])): ?>
                        <span class="error-message"><?php echo $errors['email']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="gondviselo_neve">Űrlapot kitöltő gondviselő neve</label>
                    <input type="text" id="gondviselo_neve" name="gondviselo_neve" class="form-control"
                           value="<?php echo htmlspecialchars($formData['gondviselo_neve']); ?>" required>
                    <?php if (isset($errors['gondviselo_neve'])): ?>
                        <span class="error-message"><?php echo $errors['gondviselo_neve']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="gyermek_neve">Gyermek neve</label>
                    <input type="text" id="gyermek_neve" name="gyermek_neve" class="form-control"
                           value="<?php echo htmlspecialchars($formData['gyermek_neve']); ?>" required>
                    <?php if (isset($errors['gyermek_neve'])): ?>
                        <span class="error-message"><?php echo $errors['gyermek_neve']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="gyermek_osztalya">Gyermek osztálya</label>
                    <input type="text" id="gyermek_osztalya" name="gyermek_osztalya" class="form-control"
                           value="<?php echo htmlspecialchars($formData['gyermek_osztalya']); ?>" required>
                    <?php if (isset($errors['gyermek_osztalya'])): ?>
                        <span class="error-message"><?php echo $errors['gyermek_osztalya']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="keres">Kérésem </label>
                    <textarea id="keres" name="keres" class="form-control"
                              rows="4"><?php echo htmlspecialchars($formData['keres']); ?></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" id="submit-btn" class="btn-primary">
                        <span class="spinner" id="btn-spinner"></span>
                        <span id="btn-text">Beküldés</span>
                    </button>
                    <?php if ($message && !empty($errors)): ?>
                        <span id="form-error-msg" class="message <?php echo $messageClass; ?>" style="margin-left: 10px; font-weight: bold;">
                            <?php echo $message; ?>
                        </span>
                    <?php endif; ?>
                </div>
            </form>
        <?php endif; ?>

        <div class="todo-floating-container">
            <div class="keszito">
                A teszt időszakban az email a weboldal készítőnek megy
            </div>
        </div>

    </section>
</main>

<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>

<script>
    document.getElementById('laptop-form').addEventListener('submit', function() {
        var btn = document.getElementById('submit-btn');
        var spinner = document.getElementById('btn-spinner');
        var btnText = document.getElementById('btn-text');
        var errorMsg = document.getElementById('form-error-msg');
        var fieldErrors = document.querySelectorAll('.error-message');

        btn.disabled = true;
        spinner.style.display = 'inline-block';
        btnText.innerText = 'Küldés folyamatban...';

        if (errorMsg) {
            errorMsg.style.display = 'none';
        }

        fieldErrors.forEach(function(el) {
            el.style.display = 'none';
        });
    });
</script>