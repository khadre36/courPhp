<?php 
$etudiants = [

[
	"numero" => 1,
"prenom" => "cherif",
"nom" => "Diallo",
"adress" => "Dakar",
],

[
	"numero" => 2,
"prenom" => "Samba",
"nom" => "Faye",
"adress" => "Dakar"
],

["numero" => 3,
"prenom" => "Fatou",
"nom" => "Ka",
"adress" => "Dakar"],

["numero" => 4,
"prenom" => "Coumba",
"nom" => "Diallo",
"adress" => "Dakar"],

["numero" => 5,
"prenom" => "Moustapha",
"nom" => "Mbengue",
"adress" => "Dakar"],

["numero" => 6,
"prenom" => "Saliou",
"nom" => "Sy",
"adress" => "Dakar"],

["numero" => 7,
"prenom" => "Issa",
"nom" => "Badji",
"adress" => "Dakar"],

["numero" => 8,
"prenom" => "Alioune",
"nom" => "Seye",
"adress" => "Dakar"],

["numero" => 9,
"prenom" => "Modou",
"nom" => "Gueye",
"adress" => "Dakar"],


];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12 card">
			<div class="card-header">
				liste des produits
			</div>
			<div class="card-body">
				
				<table class="table">
					<thead>
					<tr>
						<th>numero</th>
						<th>prenom</th>
						
						<th>nom</th>
						<th>adress</th>
					</tr>
					</thead>
					<tbody>
						<?php foreach ($etudiants as $etudiant) {?>
						<tr>
						<td><?php echo $etudiant['numero']; ?></td>
						<td><?php echo $etudiant['prenom']; ?></td>
						<td><?php echo $etudiant['nom']; ?></td>
						<td><?php echo $etudiant['adress']; ?></td>
						
					</tr>
					<?php } ?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>