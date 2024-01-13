<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <style>
 form
 {
     border-bottom: 1px solid black;
     padding-bottom: 23px;
 }
 </style>
</head>
<body>
<div class="container" >
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6" style="border: 1px solid black;padding: 42px;margin-top: 54px;">
<fieldset>
<legend>Redeem gift Card</legend>
<div class="row"><br/>
<div class="col-sm-12">

<form  action="/" method="post">
<input type="text" class="form-control" id="giftCardCode" name="giftCardCode" value="<?php if(isset($number)){echo $number;} ?>"/><br/>
<input type="submit" value="Redeem" name="submitR" class="w-50" id="txtbtn" style="    margin-left: 225px;"/>


</div>
</div>
<div class="row">
<div class="col-sm-4" style="    padding-bottom: 25px;">
<b>Balance:</b><span><?php if (isset($balance)){echo "$".$balance;}else{echo "$0";}?></span><br/>
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4" style="text-align: right;">
<b style="color:green;"><?php if (isset($balance)){echo $card;}else{echo "Invalid Card";}?></b><br/>
</div>
</div>

<div class="row">
<div class="col-sm-4">
<b>Customer Number</b>
<input type="text" class="form-control" name="customerNumber" id="customerNumber" value="<?php if(isset($customerNumber)){echo $customerNumber;} ?>"/>
</div>
<div class="col-sm-5"></div>
<div class="col-sm-1" style="padding-top: 15px;">
<button type="submitP">Apply Payment</button>

</div>

</div>
</form>
<p><?php if(isset($data)){echo $data;} ?></p>
</fieldset>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</body>
</html>