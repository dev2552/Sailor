@extends('layouts.main')

@section('content')
	<style>
		.img
		{
			width: 10vw;
		}
		.card-avatar
		{
			text-align: center;
		}
		.name
		{
			margin-top: 3px;
			font-weight: bold;
		}
		.t1
		{
			font-weight: bold;
		}
		.cur
		{
			cursor: pointer;
		}
		.exp_title
		{
			font-weight: bold;
		}
		.divi
		{
			border:1px solid purple;
		}
		.m
		{
			cursor: pointer;
			color: red
		}
		.g
		{
			color: green;
		}
	</style>
	<div class="row">
		<button class="btn btn-primary">Upload CV</button>
		<button class="btn btn-primary">Imprimer CV</button>
		<button class="btn btn-primary">Voir les offres d'emploi <i class="material-icons">remove_red_eye</i></button>
		<button class="btn btn-primary">Voir votre postulation <i class="material-icons">remove_red_eye</i></button>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header card-header-primary">
					Your information
				</div>
				<div class="card-body">
					<div class="card-avatar">
						<img class="img" src="{{ asset('img/profile.png') }}">
						<p class="name">Zakariae Aboud</p>
						<div class="infos">
							<div class="card-body">
								<p><span class="t1">Date de naissance :</span><span> 03/02/1995</span></p>
								<p><span class="t1">Nationalité :</span><span>marocain</span></p>
								<p><span class="t1">Situation familliale :</span><span> Célibataire</span></p>
								<p><span class="t1">Adresse :</span><span> Maroc</span></p>
								<p><span class="t1">Téléphone :</span><span> 0625232523</span></p>
								<p><span class="t1">Email :</span><span>qsqs@qsqsqs.com</span></p>
							</div>
						</div>
					</div>
					<button class="btn btn-primary">Update your information <i class="material-icons">create</i></button>
					
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header card-header-primary">
					CV
				</div>
				<div class="card-body">
					<h3>Expérience <i class="cur material-icons g">add_box</i></h3>
					<hr>
					<h4 class="exp_title">LEAR : Stage <i class="material-icons m">indeterminate_check_box</i> <i class="cur material-icons">edit</i></h4>
					<p>21/25/2525 - 25/99/8525</p>
					<p>Réalisation d'une application décisionnel pour suivi les indicateurs de qualité et de production </p>
					<hr class="divi">
					<h3>Formation <i class="cur material-icons g">add_box</i></h3>
					<hr>
					<h4 class="exp_title">FSTT : Logiciels et systèmes informatiques <i class="material-icons m">indeterminate_check_box</i> <i class="cur material-icons">edit</i></h4>
					<p>21/25/2525 - 25/99/8525</p>
					<p>Réalisation d'une application décisionnel pour suivi les indicateurs de qualité et de production </p>
					<hr class="divi">
					<h3>Langue <i class="cur material-icons g">add_box</i></h3>
					<hr>
					<p><span class="t1">Francais : </span><span>Bon niveau</span> <i class="material-icons m">indeterminate_check_box</i> <i class="cur material-icons">edit</i></p>
					<hr class="divi">
					<h3>Compétence <i class="cur material-icons g">add_box</i></h3>
					<hr>
					<p><span class="t1">Java : </span><span>Bon niveau</span> <i class="material-icons m">indeterminate_check_box</i> <i class="cur material-icons">edit</i></p>
					<hr class="divi">
					<h3>Divers <i class="cur material-icons g">add_box</i></h3>
					<hr>
					<hr class="divi">
					<h3>Réseaux sociaux <i class="cur material-icons g">add_box</i></h3>
					<hr>
					<p>https://www.linkedin.com/in/zakariaeaboud <i class="material-icons m">indeterminate_check_box</i> <i class="cur material-icons">edit</i></p>
				</div>
			</div>
		</div>
	</div>
@endsection