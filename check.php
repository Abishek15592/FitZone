<?php

echo 'abi';

$conn=mysqli_connect("localhost","abi1","abi123","Food Calculation") or die("not working");

  echo 'hi';
  $sum=0;

  if(!empty($_POST['favorite_food'])){
          foreach($_POST['favorite_food'] as $sam)
          {
            echo $sam;
            $query = "select * from Food";
            $test = mysqli_query($conn,$query);
            if($test)
            {
              while($array = mysqli_fetch_array($test,MYSQLI_ASSOC))
              {
                if($array['FoodName'] == $sam)
                {
                  $sum=$sum+$array['Calorie'];
                }
              }
            }
            else {
              echo "fail...";
            }
          }
        }

echo "You have got calories of : ";
echo $sum;

?>
