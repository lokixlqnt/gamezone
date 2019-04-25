@extends('layouts.app')

@section('title', 'Compte')

@push('styles')
  <link rel="stylesheet" href="{{ url ('css/recrute.css')}}">
@endpush

@section('content')
@include('layouts.nav')

  <div class="box_img">
    <div class="yellow_box">
      <div class="text_element">
      <p class="recrute_t">RECRUTEMENT</p>
      <p class="recrute_corps">Découvrez les offres d'emploi du GEEK CyberCenter
         GameZone et postulez pour rejoindre une équipe dynamique et passionnée.</p>
      <img class ="imglogo" src="/img/logo_gamezone.png">
    </div>
    </div>
  </div>
  <div class="ligntext">
    <a class="text_l">Découvrez notre philoshophie</a>
  </div>
  <div class="philo_text">
    <div class="boxtext3">
      <p class="title_philo">Vous êtes un(e) gamer(euse) dans l'âme? Vous avez
        les justes valeurs pour travailler dans un environnement unique, loin des entreprises traditionnelles?</p>
    </div>
    <div class="boxtext1">
      <p class="text_philo1">GameZone, c’est avant tout l’envie de créer du divertissement
         et <span>des services de qualité</span>, un parc où le rêve et l’insouciance sont rois.
          A travers ces idées, nous cherchons à véhiculer <span>des valeurs d’intégrité et d’entraide.</span>
           Venez découvrir le GEEK CyberCenter GameZone, tentez l’expérience de travailler dans notre parc.</p>
    </div>
    <div class="lign_y">
    </div>
    <div class="boxtext2">
      <p class="text_philo1">Grâce aux nombreux renouvellements prévus sur nos
         <span>9000 hectares</span> et aux multiples investissements, nous sommes en plein mouvement.
          Soyez les premiers à découvrir le <span>GameZone</span> de demain dans un environnement
           qui sort totalement de l’ordinaire !</p>
    </div>
  </div>
  <div class="ligntext2">
    <a class="text_l">DÉCOUVREZ NOS OFFRES D’EMPLOIS</a>
  </div>
  <div class="offre">
<div class="title_offre">
  <p class="title_a">OFFRE CDD (18 mois) | Logisticien – Préposé stock </p>
</div>
<div class="text_offre">
  <div class="contain1">
  <pre class="title_a">Vous adoptez l’attitude indispensable d’un collaborateur GameZone :

    -Souriant(e) durant l’entièreté de votre fonction
    -Positif(ve) dans toutes les situations
    -Exemplaire et disposant d’un véritable esprit d’équipe
    -Bienveillant(e) et prévenant envers les visiteurs et vos collègues
    -Prêt(e) à accueillir et à guider le visiteur dans sa langue maternelle
</pre>
</div>
<div class="contain2">
<pre class="title_a">Vous possédez les qualités propres à la fonction :

    -Ordre, précision, rigueur
    -Résistance physique
    -Permis B
    -Brevet cariste

</pre>
</div>
  </div>
  <div class="title_offre">
    <p class="title_a">OFFRE CDD (18 mois) | Maître nageur </p>
  </div>
  <div class="text_offre">
    <div class="contain1">
    <pre class="title_a">Vous adoptez l’attitude indispensable d’un collaborateur GameZone :

      -Souriant(e) durant l’entièreté de votre fonction
      -Positif(ve) dans toutes les situations
      -Exemplaire et disposant d’un véritable esprit d’équipe
      -Bienveillant(e) et prévenant envers les visiteurs et vos collègues
      -Prêt(e) à accueillir et à guider le visiteur dans sa langue maternelle
  </pre>
  </div>
  <div class="contain2">
  <pre class="title_a">Vous possédez les qualités propres à la fonction :

      -Ordre, précision, rigueur
      -Résistance physique
      -Diplôme nageur/sauveteur
      -Brevet surveillant de baignade

  </pre>
  </div>
    </div>
</div>
@endsection
