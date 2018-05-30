<?php
    
    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID='Hos_U_P'");
    $row = mysqli_fetch_assoc($query);
    $Hos_U_P=$row['valu'];
    
    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Hos_I_P'");
    $row = mysqli_fetch_assoc($query);
    $Hos_I_P=$row['valu'];

    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Hos_Foo_P'");
    $row = mysqli_fetch_assoc($query);
    $Hos_Foo_P=$row['valu'];


    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Foo_I_M_P'");
    $row = mysqli_fetch_assoc($query);
    $Foo_I_M_P=$row['valu'];

    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Foo_I_A_P'");
    $row = mysqli_fetch_assoc($query);
    $Foo_I_A_P=$row['valu'];

    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Foo_I_N_P'");
    $row = mysqli_fetch_assoc($query);
    $Foo_I_N_P=$row['valu'];


    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Foo_U_O5_P'");
    $row = mysqli_fetch_assoc($query);
    $Foo_U_O5_P=$row['valu'];

    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Foo_U_L5_P'");
    $row = mysqli_fetch_assoc($query);
    $Foo_U_L5_P=$row['valu'];

    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Foo_U_L2_P'");
    $row = mysqli_fetch_assoc($query);
    $Foo_U_L2_P=$row['valu'];


    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Sa_P'");
    $row = mysqli_fetch_assoc($query);
    $Sa_P=$row['valu'];

    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='If_P'");
    $row = mysqli_fetch_assoc($query);
    $If_P=$row['valu'];


    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Spe_O5_P'");
    $row = mysqli_fetch_assoc($query);
    $Spe_O5_P=$row['valu'];

    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Spe_L5_P'");
    $row = mysqli_fetch_assoc($query);
    $Spe_L5_P=$row['valu'];


    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Fasi_Sta_P'");
    $row = mysqli_fetch_assoc($query);
    $Fasi_Sta_P=$row['valu'];

    $query=mysqli_query($conn, "SELECT * FROM val WHERE valID ='Fasi_Stu_P'");
    $row = mysqli_fetch_assoc($query);
    $Fasi_Stu_P=$row['valu'];
?>    