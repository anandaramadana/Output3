<html> 
    <head> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Profil Mahasiswa</title> 
        <link type="text/css" rel="stylesheet" href="form.css"> 
    </head> 
    <body> 
        <fieldset> 
            <legend> 
                <h1> 
                    <b>Create a New Profile</b> 
                </h1> 
            </legend> 
            <h2 id="isi"></h2> 
            <form action="tujuanoutput.php" method="post" id="form">
            <div id="bagian"> 
                    <label for="namadepan">First Name :</label> 
                    <br> 
                    <input type="text" id="namadepan" name="namadepan"> 
                </div>        
                <div id="bagian"> 
                    <label for="namabelakang">Last Name :</label> 
                    <br> 
                    <input type="text" id="namabelakang" name="namabelakang">  
                </div>
                <div id="bagian"> 
                    <label for ="gender" id="jenis" name="gender">Gender :</label>  
                    <br> 
                    <input type="radio" name="gender" id="male" value="Male" name="male"><label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="Female" name="female"><label for="female">Female</label>
                </div>  

                <div id="bagian"> 
                    <label for="alamat">Address :</label> 
                    <br> 
                    <input type="text" id="alamat" name="alamat"> 
                </div> 

                <div id="bagian"> 
                    <label for="email">Email :</label> 
                    <br> 
                    <input type="text" id="email" name="email"> 
                </div> 

                <div id="bagian"> 
                    <label for="phone">Phone Number :</label> 
                    <br> 
                    <input type="text" id="phone" onkeydown="phoneNumberFormat()" name="notelp"> 
                </div> 
                 
                <button type="submit">save</button>

            </form> 
        </fieldset>          
</html>