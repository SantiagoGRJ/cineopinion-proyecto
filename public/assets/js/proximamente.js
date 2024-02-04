const url_upcomming =
  "https://api.themoviedb.org/3/movie/upcoming?language=es-MX&page=5";
const options_upcomming = {
  method: "GET",
  headers: {
    accept: "application/json",
    Authorization:
      "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzMGYzMDcwZmU3NGIzNWRkY2JjMTgwZWZmMTRmZTg0MyIsInN1YiI6IjYzNzViMDYxZmFiM2ZhMDBiNGNmZjNmZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Xi-0Zhg8ZITEz84prkLphBBWZOr8YRrzMgy_I9V30e8",
  },
};

fetch(url_upcomming, options_upcomming)
  .then((res) => res.json())
  .then((json) => {
    const movieListElement = document.getElementById("movie_upcoming");
    let htmlContent = "";

    function formatReleaseDate(dateString) {
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return new Date(dateString).toLocaleDateString('es-ES', options);
      }

    json.results.forEach((movie) => {
      //
      htmlContent += `
      <li>
        <div class="movie-card">

          <a href='cineopinion/${movie.id}'>
            <figure class="card-banner">
              <img src="https://image.tmdb.org/t/p/w500${movie.poster_path}" alt="${movie.poster_path}">
            </figure>
          </a>

          <div class="title-wrapper">
            <a href='cineopinion/${movie.id}'>
              <h3 class="card-title">${movie.title} </h3>
            </a>

            <time datetime="${movie.release_date}">${formatReleaseDate(movie.release_date)}</time>
          </div>

          <div class="card-meta">
            <div class=""></div>

            <div class="duration">
              <ion-icon name=""></ion-icon>

              <time datetime="PT47M"></time>
            </div>

            <div class="rating">
              <ion-icon name=""></ion-icon>

              <data></data>
            </div>
          </div>

        </div>
      </li>
`;
    });


    movieListElement.innerHTML = htmlContent;
  })
  .catch((err) => console.error("error:" + err));


