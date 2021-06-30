<?php   
print_r($_POST);

public function pay(Order $order, Request $request){
    return $request->all();
}
?>
