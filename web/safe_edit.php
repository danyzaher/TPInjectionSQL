<!DOCTYPE html>
<html>
   <body>


      <?php
         session_start();
         $input_email = $_GET['Email'];
         $input_nickname = $_GET['NickName'];
         $input_address= $_GET['Address'];
         $input_pwd = $_GET['Password'];
         $input_phonenumber = $_GET['PhoneNumber'];
         $input_id = $_SESSION['id'];
         $conn = getDB();

         $sql="";
         if($input_pwd!=''){
            $input_pwd = sha1($input_pwd);
            $sql = "UPDATE credential SET nickname=':nickname',email=':email',address=':address',Password=':password',PhoneNumber=':phone' where ID=:id;";
         }else{
            $sql = "UPDATE credential SET nickname=':nickname',email=':email',address=':address',PhoneNumber=':phone' where ID=:id;";
         }
         $stmt=$conn->prepare($sql);
         $stmt->bindValue(':pass', $password);
         $stmt->bindValue(':nickname', $input_nickname);
         $stmt->bindValue(':email', $input_email);
         $stmt->bindValue(':address', $input_address);
         $stmt->bindValue(':phone', $input_phonenumber);
         $stmt->bindValue(':id', $input_id);
         $stmt->execute();
         $conn->close();
         header("Location: safe_credential.php");
         exit();

         function getDB() {
            return new PDO('mysql:host=localhost;dbname=Users', 'service', 'password');
         }

      ?>

   </body>
</html>
