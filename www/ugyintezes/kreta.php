<?php
session_start();
$basePath = '../'; ?>
<?php include '../includes/constants.php'; ?>
<?php
$message = $_SESSION['form_message'] ?? "";
$messageClass = $_SESSION['form_message_class'] ?? "";
$messageSent = $_SESSION['form_message_sent'] ?? "";
unset($_SESSION['form_message_sent']);
$formData = $_SESSION['form_data'] ?? [
        'email' => '',
        'gondviselo_neve' => '',
        'gyermek_neve' => '',
        'gyermek_osztalya' => '',
        'belepes_tipusa' => '',
        'megjegyzes' => ''
];

// Miután kiolvastuk, töröljük a munkamenetből, hogy frissítésnél ne maradjon ott
unset($_SESSION['form_message'], $_SESSION['form_message_class'], $_SESSION['form_data']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Adatok összegyűjtése
    $formData['email'] = $_POST['email'] ?? '';
    $formData['gondviselo_neve'] = $_POST['gondviselo_neve'] ?? '';
    $formData['gyermek_neve'] = $_POST['gyermek_neve'] ?? '';
    $formData['gyermek_osztalya'] = $_POST['gyermek_osztalya'] ?? '';
    $formData['belepes_tipusa'] = $_POST['belepes_tipusa'] ?? '';
    $formData['megjegyzes'] = $_POST['megjegyzes'] ?? '';

    // Az email címet ide írd be
    $admin_email = "marton.szabolcs@gmail.com";

    $targy = "Új Kréta jelszó igénylés";

    $uzenet = "Új Kréta jelszó igénylés érkezett:\n\n";
    $uzenet .= "Email cím: " . $formData['email'] . "\n";
    $uzenet .= "Gondviselő neve: " . $formData['gondviselo_neve'] . "\n";
    $uzenet .= "Gyermek neve: " . $formData['gyermek_neve'] . "\n";
    $uzenet .= "Osztály: " . $formData['gyermek_osztalya'] . "\n";
    $uzenet .= "Belépés típusa: " . ($formData['belepes_tipusa'] ?: "Nincs kiválasztva") . "\n";
    $uzenet .= "Megjegyzés: " . $formData['megjegyzes'] . "\n";

    $fejlec = "From: " . $formData['email'] . "\r\n";
    $fejlec .= "Cc: " . $formData['email'] . "\r\n";
    $fejlec .= "Reply-To: " . $formData['email'] . "\r\n";
    $fejlec .= "X-Mailer: PHP/" . phpversion();

    if (mail($admin_email, $targy, $uzenet, $fejlec)) {
        $_SESSION['form_message'] = "Az igénylés sikeresen elküldve!";
        $_SESSION['form_message_class'] = "text-success";
        $_SESSION['form_message_sent'] = true;
        // Siker esetén kiüríthetjük az űrlapot, de a kérés szerint tartsuk meg
        $_SESSION['form_data'] = $formData;
    } else {
        $_SESSION['form_message'] = "Hiba történt az üzenet küldése közben!";
        $_SESSION['form_message_class'] = "text-danger";
        $_SESSION['form_message_sent'] = false;
        $_SESSION['form_data'] = $formData;
    }

    // Redirect to self to prevent form resubmission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
<?php /*  ------------------ BÖNGÉSZŐ TITLE ----------------------- */ ?>
<?php $pageTitle = 'Kréta ügyintézés' . $pageTitlePostfix; ?>
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

    </style>
<?php /*  ------------------ TARTALOM ELEJE ----------------------- */ ?>
    <main id="page-content">
        <section id="sample-page">
            <h1>Kréta ügyintézés</h1>

            <?php if ($message): ?>
                <span class="message <?php echo $messageClass; ?>" style="margin-left: 10px; font-weight: bold;">
                            <?php echo $message; ?>
                        </span>
            <?php endif; ?>

            <?php if (!$messageSent): ?>

                <p>
                    Ezen az űrlapon van lehetősége a Kréta rendszer használatához új jelszót igényelni.
                    Fontos, hogy az email címet helyesen adja meg, mely csak az igénylő beregisztrált email címe lehet!
                </p>

                <form action="" method="POST" class="standard-form">
                    <div class="form-group">
                        <label for="email">Email cím</label>
                        <input type="email" id="email" name="email" class="form-control"
                               value="<?php echo htmlspecialchars($formData['email']); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="gondviselo_neve">Űrlapot kitöltő gondviselő neve</label>
                        <input type="text" id="gondviselo_neve" name="gondviselo_neve" class="form-control"
                               value="<?php echo htmlspecialchars($formData['gondviselo_neve']); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="gyermek_neve">Gyermek neve</label>
                        <input type="text" id="gyermek_neve" name="gyermek_neve" class="form-control"
                               value="<?php echo htmlspecialchars($formData['gyermek_neve']); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="gyermek_osztalya">Gyermek osztálya</label>
                        <input type="text" id="gyermek_osztalya" name="gyermek_osztalya" class="form-control"
                               value="<?php echo htmlspecialchars($formData['gyermek_osztalya']); ?>" required>
                    </div>

                    <div class="form-group">
                        <label>Belépés típusa</label>
                        <label class="form-check">
                            <input type="radio" name="belepes_tipusa"
                                   value="tanulo" <?php echo ($formData['belepes_tipusa'] == 'tanulo') ? 'checked' : ''; ?>
                                   required>
                            <span>Tanulói belépés igénylése</span>
                        </label>
                        <label class="form-check">
                            <input type="radio" name="belepes_tipusa"
                                   value="gondviselo" <?php echo ($formData['belepes_tipusa'] == 'gondviselo') ? 'checked' : ''; ?>>
                            <span>Gondviselői belépés igénylése</span>
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="megjegyzes">Megjegyzés (nem kötelező)</label>
                        <textarea id="megjegyzes" name="megjegyzes" class="form-control"
                                  rows="4"><?php echo htmlspecialchars($formData['megjegyzes']); ?></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-primary">Igénylés beküldése</button>

                    </div>
                </form>
            <?php endif; ?>

            <div class="todo-floating-container">
                <div class="keszito">
                    Küldjön majd levelet a csvmg.info@gmail.com -ra.CC-ze a feladót
                </div>
            </div>

        </section>
    </main>


<?php /*  ------------------ TARTALOM VÉGE ----------------------- */ ?>
<?php include '../includes/sitemap.php'; ?>
<?php include '../includes/footer.php'; ?>