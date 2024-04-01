var lang = document.getElementById('lang').value;
console.log(lang)

// Verificar si el elemento de la lista de películas está presente en la página
const movieListElement = document.getElementById("movie_action");

if (movieListElement) {
    // Mostrar la carta de marcador de posición
    const placeholderCard = document.createElement("div");
    placeholderCard.classList.add("flex", "items-center", "justify-center",
     "w-56", "h-56", "border", "border-gray-200", "rounded-lg", "bg-gray-50", "dark:bg-gray-800", "dark:border-gray-700");
    placeholderCard.innerHTML = `
    <div class="px-3 py-1 text-xs font-medium leading-none text-center
     text-blue-800 bg-blue-200 rounded-full animate-pulse dark:bg-blue-900 dark:text-blue-200">loading...</div>
</div>

    `;
    movieListElement.appendChild(placeholderCard);

    // Retraso de 2 segundos (2000 milisegundos)
    setTimeout(() => {
        // Realizar la solicitud a la API
        const url_accion = `https://api.themoviedb.org/3/discover/movie?include_adult=true&include_video=true&language=${lang}-MX&page=1&sort_by=popularity.desc&with_genres=28`;
        const options_accion = {
            method: "GET",
            headers: {
                accept: "application/json",
                Authorization: "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzMGYzMDcwZmU3NGIzNWRkY2JjMTgwZWZmMTRmZTg0MyIsInN1YiI6IjYzNzViMDYxZmFiM2ZhMDBiNGNmZjNmZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Xi-0Zhg8ZITEz84prkLphBBWZOr8YRrzMgy_I9V30e8",
            },
        };

        fetch(url_accion, options_accion)
            .then((res) => res.json())
            .then((json) => {
                // Remover la carta de marcador de posición
                placeholderCard.remove();

                // Construir y mostrar las tarjetas de película reales
                let htmlContent = "";
                json.results.forEach((movie) => {
                    htmlContent += `
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
                    </div>`;
                });
                movieListElement.innerHTML = htmlContent;
            })
            .catch((err) => console.error("error:" + err));
    }, 5000); // Retraso de 2 segundos (2000 milisegundos)
}

function formatReleaseDate(dateString) {
    const options = { year: 'numeric' };
    return new Date(dateString).toLocaleDateString(`${lang}-ES`, options);
}

