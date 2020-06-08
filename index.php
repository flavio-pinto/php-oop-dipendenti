<?php
/**
 * Crea e modellizza classi per gestire i dipendenti di un’azienda.
 * Inserire almeno un esempio di utilizzo di exceptions
 */

//Include
include_once __DIR__ . '/classes/Receptionist.php';
include_once __DIR__ . '/classes/Cameriera-ai-piani.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Dipendenti</title>
</head>
<body>
    <h1 class="title">Dipendenti</h1>
    <div class="container-liste">
        <ul class="lista-receptionists">
            <h2>Lista Receptionists</h2>
            
            <?php $counter_receptionist = 0; ?>
            <?php foreach ($lista_receptionists as $receptionist) { ?>
                <?php try { ?>
                <li>
                    <h3>Receptionist n° <?php echo $counter_receptionist = $counter_receptionist + 1; ?></h3>
                    <?php echo $receptionist->print(); ?>
                </li>
                <?php } catch(Exception $e) {
                    echo '<span class="error">Errore: ' . $e->getMessage() . '</span>';
                } ?>
            <?php } ?>
        </ul>

        <ul class="lista-cameriere">
            <h2>Lista Cameriere ai piani</h2>
            <?php $counter_cameriere = 0; ?>
            <?php foreach ($lista_cameriere as $cameriera) { ?>
                <?php try { ?>
                <li>
                    <h3>Cameriera n° <?php echo $counter_cameriere = $counter_cameriere + 1; ?></h3>
                    <?php echo $cameriera->print(); ?>
                </li>
                <?php } catch(Exception $e) {
                    echo '<span class="error">Errore: ' . $e->getMessage() . '</span>';
                } ?>
            <?php } ?>
        </ul>
    </div>
</body>
</html>