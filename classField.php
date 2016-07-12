
<?php
class HTMLBuilder{
    public function selectBox($name,$collection){
        $html="<select name='{$name}'>";
        foreach ($collection as $item){
            $html.="<option>{$item}</option>";
        }
        $html.="</select>";
        return $html;
    }
}
//instantiated object
$select= new HTMLBuilder;
echo $select->selectBox('cities',['orillia','Barrie']);
?>

