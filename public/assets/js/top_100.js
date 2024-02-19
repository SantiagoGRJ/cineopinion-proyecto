// En tu archivo JavaScript

// Verificar si el elemento de la lista de películas está presente en la página
const movieListElement = document.getElementById("top-cien");

if (movieListElement) {
    // Mostrar la carta de marcador de posición
    const placeholderCard = document.createElement("div");
    placeholderCard.classList.add("flex", "items-center", "justify-center", "w-56", "h-56", "border", "border-gray-200", "rounded-lg", "bg-gray-50", "dark:bg-gray-800", "dark:border-gray-700");
    placeholderCard.innerHTML = `
        <div role="status">
            <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
            <span class="sr-only">Loading...</span>
        </div>
    `;
    movieListElement.appendChild(placeholderCard);

    // Retraso de 2 segundos (2000 milisegundos)
    setTimeout(() => {
        // Realizar la solicitud a la API
        const url_top = 'https://api.themoviedb.org/3/movie/popular?language=es-MX&page=5';
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
                // Remover la carta de marcador de posición
                placeholderCard.remove();

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
    }, 2000); // Retraso de 2 segundos (2000 milisegundos)
}

function formatReleaseDate(dateString) {
    const options = { year: 'numeric' };
    return new Date(dateString).toLocaleDateString('es-ES', options);
}
