<form action="index.php?controller=droit&task=insert" method="post" enctype="multipart/form-data">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<FIeldset class="scheduler-border form-inline">
    <legend class="scheduler-border">affecter les droits a 

<img src="" alt="" class="form-circle" width="60px;">

</legend>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<center style="margin-top:-1px;">
<h5>
<input  type="hidden" name="user" value="" 
    <label for=""> 
    <input type="checkbox"  id="alldroits">Affecter Tous les droits
</h5>
</label> 
</center>


</div>
<div class="col-lg-6 col-md-6 col-sm-4 card" >
<fieldset class="scheduler-border">
    <legend class="scheduler-border">
        <label class="btn btn-sm" onclick="hideshowinfoUser()"   id="labinfoUser"  for="">
        +</label>
   <input type="checkbox" name="droit[]" value="1-0"   id="droit_user">
   Utilisateurs</legend>
    <div id="infoUser" style="display: none;">
    <table class="table borderless">
       <tr><td>
        <input type="checkbox" name="droit[]" value="1-1-0"    class="droit_u" id=""> Ajouter
        </td>
        <td>
        <input type="checkbox" name="droit[]" value="1-2-0"    class="droit_u"   id="droit_u"> Supprimer 
        </td>
        </tr>
        <tr> <td>
        <input type="checkbox" name="droit[]" value="1-3-0" class="droit_u"     id="droit_u"> Modifier 
        </td>
        <td>
        <input type="checkbox" name="droit[]" value="1-4-0" class="droit_u"     id="droit_u"> Attribution des droits
        </td>
        </tr>
        </table>
        </div>
    
</fieldset>

</div>

<div class="col-lg-12">
 <center><input type="submit" name="affecter" class="btn btn-success btn" value='Affecter les droits'>
 <input type="submit" name="desafecter" class="btn btn-danger " value='Désaffecter les droits'></center>
 </div>


</FIeldset>


</div> 

</form>