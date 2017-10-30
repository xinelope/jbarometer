<?php
defined('_JEXEC') or die;
class JBarometerHelper
 {
 	private $stat = 0;
 	private $statdat = "";
 	private $etappe1 = 0;
  private $dat1 = "";
 	private $ziel = 0;
 	private $zieldat = "";
 	public function getKompParas($jbf)
 	{
    $datum = 0; $d = array();
    switch ($jbf) {
      case 'standdatum':
      $datum = 1;
        break;
      case 'datum1':
       $datum = 1;
        break;
      case 'zieldatum':
       $datum = 1;
        break;
      default:
      $datum = 0;
    }
    $db    = JFactory::getDBO();
    $query = $db->getQuery(true);
    $query->select($jbf);
    $query->from('#__jbarometer');
    $query->where('id'." = ". 1);
    $db->setQuery($query);
    $result = $db->loadResult();
    if ($result)
    {
      if($datum == 0) {
        $jbfret = intval($result);
      } else {
        $d = explode("-",$result);
        $jbfret = $d[2].".".$d[1].".".$d[0];
      }
      return $jbfret;
    } else {  return false;   }
 	 }
  }
?>
