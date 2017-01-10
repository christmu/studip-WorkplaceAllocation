<?php
/**
 * addWorkplace template
 * shows form to collect information to add a workplace
 *
 * Created by PhpStorm.
 * User: jayjay
 * Date: 11.05.16
 * Time: 16:42
 *
 * @var bool $error if an error is occurred on the form entries
 * @var string $errorDetails details of the occurred error
 */

if($error)
{
    print(MessageBox::error(_("Bitte beheben Sie erst folgende Fehler, bevor Sie fortfahren:"), $errorDetails));
}


/** @var \Studip\Button $submitButton */
$submitButton = \Studip\Button::create(_("Hinzuf&#252;gen"), null, array("type" => "submit"));

?>
<h1><?= _("Arbeitsplatz hinzuf&#252;gen")?></h1>

<form action="<?= PluginEngine::getLink("WorkplaceAllocation", array(), "addWorkplace") ?>" method="post" class="studip-form">
    <section class="required">
        <label for="wp_name"><?=_("Name")?></label>
        <input id="wp_name" name="wp_name" type="text" class="size-m" value="<?= $_POST['wp_name'] ?>">
    </section>
    <section>
        <label for="wp_description"><?=_("Beschreibung")?></label>
        <textarea id="wp_description" name="wp_description" cols="75" rows="4"><?= $_POST['wp_description'] ?></textarea>
    </section>
    <?= $submitButton ?>
</form>