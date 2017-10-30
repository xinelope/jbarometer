<?php
defined( '_JEXEC' ) or die( 'Restricted Access' );
$docu = JFactory::getDocument();
$docu->addStyleSheet( Juri::base() .'modules/mod_jbarometer/css/mod_jbarometer.css');
$docu->addScript(Juri::base() .'modules/mod_jbarometer/mod_jbarometer.js');
?>
<div class="jb-grafik">
    <div class="verlauf">
    </div>
    <div class="jb-trenner">
    </div>
</div>
<div class="jb-legende">
    <div class="">0 € </div>
    <div class="jb-trenner-txt">100.000 €</div>
    <div class="ziel-txt">500.000 € </div>
</div>
<div class="jb-liste">
  <p class="jb-nbr"><?php echo number_format($stand, 0, '','.'); ?> €</p>
  <p> bereits eingegangen (Stand <?php echo $standdatum ?>)</p>
      <p class="jb-nbr defizit"><u><?php echo number_format($diff, 0, '','.'); ?> €</u></p>
      <p class="defizit"> noch ausstehend</p>
      <input type="hidden" id="defizitBetrag" value="<?php echo $diff; ?>">
  <p class="jb-nbr"><?php echo number_format($etappe1, 0, '','.'); ?> €</p>
  <p> Mindestbetrag bis <?php echo $datum1; ?></p>
  <p class="jb-nbr"></p><p>&nbsp;</p>
  <p class="jb-nbr"><?php echo number_format($zielsumme, 0, '','.'); ?> €</p>
  <p> geplante Summe bis <?php echo $zieldatum; ?></p>
</div>
<p class=""></p>
<p></p>
  <div>
        <input id="aktstand" type="hidden" value="<?php echo $stand; ?>" >
        <input id="etappe1" type="hidden" value="<?php echo $etappe1; ?>" >
        <input id="zielsumme" type="hidden" value="<?php echo $zielsumme; ?>" >
    </div>
  </form>
