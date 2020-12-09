@extends('layout.master')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div id="infoMessage" style="display: none;"></div>
                    
                    <div class="header">
                        <span class="pull-right panel-options">
                            <i class="fa" id="toggle"></i>
                        </span>
                        <h3 class="panel-title">Penerimaan Aset Alih</h3>
                    </div>
                    <div class="panel-body" id="panel">
                        <div class="panel-body" id="panel">
                        <form action="../php/submit_form_guider.php" method="post" enctype="multipart/form-data">
                                <table class="tableform">
                                        <tr>
                                            <td class="lefttd"><label for="Image">Profile Picture</label></td>
                                            <td class="righttd"><img id="output_image" width="200px"></img><br><input type="file" id="image" name="image" onchange="preview_image(event)" required></input></td>
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="name">Username </label></td>
                                            <td class="righttd"><input type="text" id= "username" name="username" placeholder="Insert Your Username" required></input></td>
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="email">Email </label></td>
                                            <td class="righttd"><input type="email" id= "email" name="email" placeholder="Insert Your Email" required></input></td>
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="password">Password </label></td>
                                            <td class="righttd"><input type="password" id= "password" name="password" placeholder="Create a Password" required></input></td>
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="name">Name </label></td>
                                            <td class="righttd"><input type="text" id= "name" name="name"  placeholder="Insert Your Name" required></td>
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="noTel">Telephone Number </label></td>
                                            <td class="righttd"><input type="text" id= "noTel" name="noTel" pattern="[0-9]{10}" placeholder="Insert phone number with the format : 0192398188" required></td>
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="address">Address </label></td>
                                            <td class="righttd"><input type="text" id= "address" name="address" placeholder="Insert Your Address" required></td>
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="Ic">Identification Card </label></td>
                                            <td class="righttd"><input type="text" id= "Ic" name="Ic" placeholder="Insert Your Identification Card" required></td>
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="ename">Emergency Name</label></td>
                                            <td class="righttd"><input type="text" id= "ename" name="ename" placeholder="Insert an Emergency Contact Name" required></td>  
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="enotel">Emergency Telephone </label></td>
                                            <td class="righttd"><input type="text" id= "enotel" name="enotel" placeholder="Insert an Emergency Telephone" required></td>                
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="erelationship">Emergency Contact Relationship </label></td>
                                            <td class="righttd"><input type="text" id= "erelationship" name="erelationship" placeholder="Insert The Emergency Contact Relationship" required></td>
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="Image">Gender</label></td>
                                            <td class="righttd2">
                                                <select id= "gender" name= "gender" required> 
                                                    <option >- Choose Your Gender -</option>
                                                    <option value="Male" >Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="Image">Race</label></td>
                                            <td class="righttd2">
                                                <select id= "race" name= "race" required> 
                                                    <option >- Choose Your Race -</option>
                                                    <option value="Malay" >Malay</option>
                                                    <option value="Chinese">Chinese</option>
                                                    <option value="Indian">Indian</option>
                                                    <option value="Bumiputra">Bumiputra</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="Image">Religion</label></td>
                                            <td class="righttd2">
                                                <select id= "religion" name= "religion" required> 
                                                    <option >- Choose Your Religion -</option>
                                                    <option value="Islam" >Islam</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Buddhist">Buddhist</option>
                                                    <option value="Christian">Christian</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="lefttd"><label for="resume">Resume</label></td>
                                            <td class="righttd"><img id="resume_image"/><br><input type="file" id="resume" name="resume" onchange="preview_image(event)" required></td>
                                         </tr>

                                         <tr style="background-color:transparent; border:none">
                                            <td class="centertd" colspan="2"><input type="submit" value="register" required></td>
                                        </tr>


                                </table>
                                </form></div> 
                        




                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>

@endsection
