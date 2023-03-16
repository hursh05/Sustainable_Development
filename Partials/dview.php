<?php   
 $conn=mysqli_connect("localhost","root","","hackathon"); //database connection  

 if ($conn) {  
      echo "Connection successfully";  
 }else{  
      echo "Error";  
 }  
 //check database connect or not  
 $query="select * from doctor";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>doctor view</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                width: 100%;  
                min-height: 100vh;  
                background-color: #5d6d7d;  
           }  
           .container{  
                max-width: 900px;  
                margin: 100px auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse;  
                width: 100%;  
           }  
           table th{  
                background-color: red;  
                color: #fff;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: #fff;  
                font-size: 1em;  
                text-align: center;  
           }  
           table tr:nth-child(odd){  
                background-color: #797676;  
           }  
      </style>  
 </head>  
 <body>  
 <div class="container">  
      <table border="1">  
           <tr>  
                <th>ID</th>  
                <th>Name</th>  
                <th>Email</th>  
                <th>Mobile</th>
                <th>specialization</th>
                <th>About Doctor</th>
                <th>Experience</th>  
           </tr>  
           <?php   
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
                          echo "  
                               <tr>  
                               <td>".$data['id']."</td>  
                               <td>".$data['doctorname']."</td>  
                               <td>".$data['email']."</td>  
                               <td>".$data['phone']."</td>
                               <td>".$data['specialization']."</td>
                               <td>".$data['aboutdoctor']."</td>
                               <td>".$data['experience']."</td>  
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>  
 </div>  
 </body>  
 </html>  