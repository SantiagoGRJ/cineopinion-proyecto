// En tu archivo JavaScript

// Verificar si el elemento de la lista de películas está presente en la página
const movieListElement = document.getElementById("top-cien");


var lang = document.getElementById('lang').value;
console.log(lang)

// Realizar la solicitud a la API
const url_top = `https://api.themoviedb.org/3/movie/popular?language=${lang}-MX&page=5`;
const options_top = {
    method: "GET",
    headers: {
        'Authorization': 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzMGYzMDcwZmU3NGIzNWRkY2JjMTgwZWZmMTRmZTg0MyIsInN1YiI6IjYzNzViMDYxZmFiM2ZhMDBiNGNmZjNmZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Xi-0Zhg8ZITEz84prkLphBBWZOr8YRrzMgy_I9V30e8',
        'accept': 'application/json'
    }
};

fetch(url_top, options_top)
    .then((res) => res.json())
    .then((json) => {


        // Construir y mostrar las tarjetas de película reales
        let htmlContent = "";
        json.results.forEach((movie) => {
            htmlContent += `<li>
            <div class="movie-card">
                <a href='cineopinion/${movie.id}'>
                    <figure class="card-banner">
                        <img src='https://image.tmdb.org/t/p/w500${movie.poster_path}' alt="${movie.title}">
                    </figure>
                </a>

                <div class="title-wrapper">
                    <a href='cineopinion/${movie.id}'>
                        <h3 class="card-title">${movie.title}</h3>
                    </a>
                    <time datetime="${movie.release_date}">${formatReleaseDate(movie.release_date)}</time>
                </div>

                <div class="card-meta">
                    <div class="badge badge-outline">HD</div>

                    <div class="duration">
                        <ion-icon name="star"></ion-icon>
                        <time datetime="PT137M">${movie.vote_count}</time>
                    </div>

                    <div class="rating">
                        <ion-icon name="star"></ion-icon>
                        <data>${movie.vote_average}</data>
                    </div>
                </div>
            </div></li>`;
        });
        movieListElement.innerHTML = htmlContent;
    })
    .catch((err) => console.error("error:" + err));

function formatReleaseDate(dateString) {
    const options = { year: 'numeric' };
    return new Date(dateString).toLocaleDateString(`${lang}-ES`, options);
}
