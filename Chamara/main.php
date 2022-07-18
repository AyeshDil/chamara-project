

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>

    
<?php
    
    $name = $number = $address = $category  = "";
    $unit = $_GET['unit'];
    $name = $_GET['name'];
    $number = $_GET['number'];
    $address = $_GET['address'];     
    $category = $_GET['category'];
  
    $price = 0;
  
    if($unit > 1 && $unit<90){
      $price = $unit * 0.75;
    }elseif($unit > 91 && $unit<180){
      $price = (($unit - 90) * 1) + (90 * 0.75);
    }elseif($unit > 181 && $unit<360){
      $price = (($unit - 180) * 1.25) + (90 * 0.75) + (90 * 1);
    }else{
      $price = (($unit - 360) * 1.50) + (90 * 0.75) + (90 * 1) + (90 * 1.25);
    }
  

  
      ?>

  <!-- ------------------------------ -->
  <!-- Chamara Sandaruwan -->
  <!-- ------------------------------ -->

  <div class="navbar">
    <div class="navbrand">
      <img src="./img/Logo-crop-bg-null.png" alt="" style="height:50px ;" >
    </div>
  </div>
  <div class="container">
    <div class="heading" align="center">
      <h1>
        Electricity Billing 
      </h1>
      <h1>System</h1>
    </div>
    <div class="table" align="center">
      <table>
        <form action="" method="get">
          <tr>
            <td><label for="">Customer Name :</label>
            </td>
            <td> 
              <label for=""><?php echo $name ?></label>
               <!-- <input type="text" name="name" placeholder="" ></td> -->
            <td> <label for="">
              categories:
            </label> 
            <!-- Catagori 3nak enawa -->
          </td>
          <td> 
            <select name="category" id="category"  >
              <?php if($category == "home") : ?>
                <option selected >Home Customers</option>
              <?php elseif($category == "business") : ?>
                <option selected>Business Customers</option>
                <?php elseif($category == "industrial") : ?>
                  <option value="industrial">Industrial Customers</option>
                  <?php elseif($category == "other") : ?>
                    <option value="other">Other Customers</option>
                <?php endif  ?>

              <!-- <option value="home">Home Customers</option>
              <option value="business">Business Customers</option>
              <option value="industrial">Industrial Customers</option>
              <option value="other">Other Customers</option> -->
            </select> 
          </td>
          </tr>

          <tr>
            <td><label for="">Customer Number :</label>
            </td>
            <td>  
              <input type="text" name="number" value="<?php echo $number;?>"></td>
            <td><label for="">Number of units :</label>
            </td>
            <td>  
              <input type="text" name="unit" value="<?php echo $unit;?>"></td>
          </tr>
          <tr>
            <td><label for="">Customer Address :</label>
            </td>
            <td> 
              <textarea name="address" id="address" cols="30" rows="7" ><?php echo $address;?></textarea></td>
              
            <td style="text-align: center;"> 
              <!-- <div style="margin-top: -50px;">NET Payment</div>
              <div style="margin-top:50px ;">$ 500</div> -->
              <div> 
                <table style="border:none ;">
                  <tr> 
                    <td style="border:none ;"><h3>NET pay :</h3> </td>
                    <!-- <td style="border:none ;">$500</td> -->
                  </tr>
                  <tr>
                    <td style="border:none ;"><h3>Total pay :</h3> </td>
                    <!-- <td style="border:none ;">$1000</td> -->
                  </tr>
                </table>
              </div>
            </td>
            <!--  -->
            <td> 
              <table style="border:none ; padding: 30px; ">
                <tr> 
                  <!-- <td style="border:none ;">NET pay :</td> -->
                  <td style="border:none ; "><h3 id="netprice"><?php echo $price ?></h3></td>
                </tr>
                <tr>
                  <!-- <td style="border:none ;">Total pay :</td> -->
                  <td style="border:none ;"><h3>$1000</h3></td>
                </tr>
              </table>
            </td>
            
          </tr>
        
      </table>

      <button type="submit" class="cal-btn">Calculate Payment</button>
      <button class="print-btn">Bill Print</button>
      
      
    </form>
    <a href="index.html"><button class="reset-btn">Reset</button></a>
      <!-- <table align="left" style="margin-left: 237px;">
        <tr>
          <td>
            <label for="">Customer Address :</label>
          </td>
          <td >
            <textarea name="address" id="address" cols="30" rows="7"></textarea>
          </td>
        </tr>
      </table> -->

      

     

    </div>

    <!-- yugfyqfkbqlfn'go
     -->

    

  </div>
  


</body>
</html>