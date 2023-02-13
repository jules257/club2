
<div class="card">
    <div class="card-header"><h1><?=$pagetitle?></h1></div>
    <div class="card-body">
        <a href="index.php?controller=user&task=new" class="btn-success btn-sm float-right">
            <span class="fas fa-plus"></span>
        </a>
<table class="table table-bordered table-striped">
    <thead>
<th>nom</th>
<th>prenom</th>
<th>telephone</th>
<th>username</th>
<th>role</th>
<th>etat</th>
<th>pasword</th>
<th>$photo</th>


    </thead>
    <tbody>
        <?php
        
        foreach($user as $u):
    ?>
    <tr>
        <td><?=$u["nom"];?></td>
        <td><?=$u["prenom"];?></td>
        <td><?=$u["telephone"];?></td>
        <td><?=$u["username"];?></td>
        <td><?=$u["role"];?></td>
        <td><?=$u["etat"];?></td>
        <td><?=$u["password"];?></td>
        <td><img src="images/<?=$u["photo"]?>" alt="" class="img-circle" width="50px;"></td>
        <td><a href="index.php?controller=user&task=new&id=<?=$u["iduser"]?>">
    <span class="fas fa-edit"></span>
    </a></td>
    <td><a href="index.php?controller=user&task=delete&id=<?=$u['iduser'];?>">
<span class="fas fa-trash"></span>
</a></td>



    </tr>
    <?php
    endforeach
    ?>

        
        
    </tbody>
</table>
</div>
</div>