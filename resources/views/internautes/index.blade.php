@extends('layout')

@section('content')
<style>
    .footer {
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
}
 

</style>
<img src="TRIARE-insights-types-of-apps-for-hotel-booking.png" alt="" width="132%" height="500px" style="margin-left: -14%;">
<div class="container">
    <h1 style="text-align: center;">Internautes</h1>
     <!-- Formulaire de recherche -->
     <form action="{{ route('internautes.index') }}" method="GET" class="form-inline mb-3" style="justify-content: center;">
        <div class="form-group mx-sm-3 mb-2">
            <label for="searchCin" class="sr-only">Search by CIN</label>
            <input type="text" class="form-control" id="searchCin" name="cin" placeholder="Enter CIN" value="{{ request('cin') }}">
        </div>
        <button type="submit" class="btn btn-info">Search</button>
    </form>

    <a href="{{ route('internautes.create') }}" class="btn btn-success">Add Internaute</a>

    <table class="table">
        <thead class="thead-dark">
            <tr >
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Date de Naissance</th>
                <th>CIN</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($internautes as $internaute)
            <tr>
                <td>{{ $internaute->nom }}</td>
                <td>{{ $internaute->prenom }}</td>
                <td>{{ $internaute->adresse }}</td>
                <td>{{ \Carbon\Carbon::parse($internaute->date_naissance)->format('d/m/Y') }}</td>
                <td>{{ $internaute->cin }}</td>
                <td>
                    <div>
                    <a href="{{ route('internautes.show', $internaute->id) }}" ><button class="btn btn-info ">View</button></a>
                    <a href="{{ route('internautes.edit', $internaute->id) }}" ><button class="btn btn-info">Edit</button></a>
                    <form action="{{ route('internautes.destroy', $internaute->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button></div>
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
