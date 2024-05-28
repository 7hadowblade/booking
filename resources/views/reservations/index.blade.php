@extends('layout')

@section('content')
<style>.footer {
  position: relative;
  width: 133%;
  background: #3586ff;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: start;
  margin-left: -15%;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}



@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}</style>
<img src="TRIARE-insights-types-of-apps-for-hotel-booking.png" alt="" width="132%" height="500px" style="margin-left: -14%;">
<div class="container">
    <h1 style="text-align: center;">Reservations</h1>
       <!-- Formulaire de recherche -->
       <form class="form-inline mb-3" style="justify-content: center;">
        <div class="form-group mx-sm-3 mb-2">
            <label for="searchDateDebut" class="sr-only">Search by Start Date</label>
            <input type="date" class="form-control" id="searchDateDebut" name="date_debut_sejour" value="{{ request('date_debut_sejour') }}">
        </div>
        <button type="submit" class="btn btn-light">Search By Date Debut</button>
    </form>

    <a href="{{ route('reservations.create') }}" class="btn btn-success">Add Reservation</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Internaute</th>
                <th>Hotel</th>
                <th>Room Type</th>
                <th>Prix</th>

                <th>Date de Début</th>
                <th>Date de Fin</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->internaute->prenom }} {{ $reservation->internaute->nom }}</td>
                <td>{{ $reservation->hotel->titre }}</td>
                <td>{{ $reservation->hotel->type_chambre }}</td> <!-- Display room type here -->
                <td>{{ $reservation->hotel->prix_unitaire }}</td> <!-- Display prix_unitaire here -->
                <td>{{ \Carbon\Carbon::parse($reservation->date_debut_sejour)->format('d/m/Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($reservation->date_fin_sejour)->format('d/m/Y') }}</td>
               

                <td>{{ $reservation->titre }}</td>

                <td>
                    <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<footer class="footer">
     <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

    </ul>
    <p>&copy;2025 Othmane El Wahidi El Alaoui | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
