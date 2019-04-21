@extends('layouts.app')

@section('title', 'Ticket')

@push('styles')
  <link rel="stylesheet" href="{{ url ('css/ticket.css')}}">
@endpush

@section('content')
@include('layouts.nav')
<main>
    <div class="container_ticket">

        <div class="box_ticket">
            <div class="box_background">
                <div class="box_title baby">Ticket
                    Enfant
                </div>
                <div class="price">Gratuit</div>
                <div class="description">pour les enfants de moins de 2 ans</div>
            </div>
            <button class="button position">Commander</button>
        </div>

        <div class="box_ticket">
            <div class="box_background">
                <div class="box_title child">Ticket
                    Enfant+
                </div>
                <div class="price">12.<span class="tiny">50€</span></div>
                <div class="description">pour les enfants entre 2 et 8 ans</div>
            </div>
            <button class="button position">Commander</button>
        </div>

        <div class="box_ticket">
            <div class="box_background">
                <div class="box_title teen">Ticket
                    Ado
                </div>
                <div class="price">13.<span class="tiny">50€</span></div>
                <div class="description">pour les ados à partir de 8 ans</div>
            </div>
            <button class="button position">Commander</button>
        </div>

    </div>

    <div class="container_ticket">

        <div class="box_ticket">
            <div class="box_background">
                <div class="box_title adult">Ticket
                    Adulte
                </div>
                <div class="price">15.<span class="tiny">00€</span></div>
                <div class="description">pour les adultes</div>
            </div>
            <button class="button position">Commander</button>
        </div>

        <div class="box_ticket_gd">
            <div class="box_background_gd">
                <div class="box_title_gd">Ticket
                    Calculateur
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Âge</th>
                            <th>Nombre de places</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Enfant entre 2 et 8 ans</td>
                            <td>
                                <button type="button" class="calcul" data-add-person-category="entre2et8"
                                    data-add-person-action="decrement">-</button>
                                <button type="button" class="calcul" data-add-person-category="entre2et8"
                                    data-add-person-action="increment">+</button>
                                <span data-display="entre2et8"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Enfant de 9 à 18 ans</td>
                            <td>
                                <button type="button" class="calcul" data-add-person-category="entre9et18"
                                    data-add-person-action="decrement">-</button>
                                <button type="button" class="calcul" data-add-person-category="entre9et18"
                                    data-add-person-action="increment">+</button>
                                <span data-display="entre9et18"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Adulte</td>
                            <td>
                                <button type="button" class="calcul" data-add-person-category="plusde18"
                                    data-add-person-action="decrement">-</button>
                                <button type="button" class="calcul" data-add-person-category="plusde18"
                                    data-add-person-action="increment">+</button>
                                <span data-display="plusde18"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="result">
                Somme pour <span data-display="nbPersonnes"></span> personnes: <span data-display="somme"></span>€
                <span class="freeticket">Places gratuites pour les enfants de moins de 2 ans.</span>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="{{ url('js/ticket.js') }}"></script>
@endsection
