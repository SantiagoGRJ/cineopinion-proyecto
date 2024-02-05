const id = document.getElementById('id').value;

const url_individual =
  ` https://api.themoviedb.org/3/movie/${id}?language=es-US`;
const options_individual = {
  method: "GET",
  headers: {
    accept: "application/json",
    Authorization:
      "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzMGYzMDcwZmU3NGIzNWRkY2JjMTgwZWZmMTRmZTg0MyIsInN1YiI6IjYzNzViMDYxZmFiM2ZhMDBiNGNmZjNmZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Xi-0Zhg8ZITEz84prkLphBBWZOr8YRrzMgy_I9V30e8",
  },
};

fetch(url_individual, options_individual)
  .then((res) => res.json())
  .then((json) => {
    const movieListElement = document.getElementById("individual");
    let htmlContent = "";
    let htm="";


    if (json.genres && json.genres.length > 0) {
        htm += '<div class="ganre-wrapper">';


        for (let i = 0; i < Math.min(6, json.genres.length); i++) {
          htm += `<a href="#">${json.genres[i].name}</a>`;
        }

        htm += '</div>';
      }

    function formatReleaseDate(dateString) {
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return new Date(dateString).toLocaleDateString('es-ES', options);
      }
       //const mitad1 = json.title.slice(0, Math.ceil(json.title.length / 2));
      //const mitad2 = json.title.slice(Math.ceil(json.title.length / 2));

      console.log(json.title);
      htmlContent +=` <div class="container">

      <figure class="movie-detail-banner">

          <img src="https://image.tmdb.org/t/p/w500${json.poster_path}" alt="Free guy movie poster">

          <button class="play-btn">
              <ion-icon name="play-circle-outline"></ion-icon>

          </button>

      </figure>

      <div class="movie-detail-content">


          <h1 class="h1 detail-title">
               <strong>${json.title}</strong>
          </h1>

          <div class="meta-wrapper">

              <!---- <div class="badge-wrapper">
                      <div class="badge badge-fill">PG 13</div>

                      <div class="badge badge-outline">HD</div>
                       </div> -->

              <div class="ganre-wrapper">
                  ${htm}

              </div>

              <div class="date-time">

                  <div>
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2021">${formatReleaseDate(json.release_date)}</time>
                  </div>

                  <!---- <div>
                  <ion-icon name="time-outline"></ion-icon>

                  <time datetime="PT115M">2h 13 min</time>
                </div> -->

              </div>

          </div>

          <p class="storyline" style="text-align: justify;">
             ${json.overview}

          </p>
          <p class="storyline" style="text-align: justify;">
          ${json.tagline}

       </p>

          <div class="details-actions">

              <button class="share">
                  <ion-icon name="share-social"></ion-icon>

                  <span>Share</span>
              </button>

              <div class="title-wrapper">
                  <p class="title">Prime Video</p>

                  <p class="text">Streaming Channels</p>
              </div>

              <button class="btn btn-primary">
                  <ion-icon name="play"></ion-icon>

                  <span>Watch Now</span>
              </button>

          </div>

          <!---- <a href="./assets/images/upcoming-1.png" download class="download-btn">
              <span>Download</span>

              <ion-icon name="download-outline"></ion-icon>
            </a> -->

      </div>

  </div>`


    movieListElement.innerHTML = htmlContent;
  })
  .catch((err) => console.error("error:" + err));



const video_only =
`https://api.themoviedb.org/3/movie/${id}/videos?language=en-US`;

const options_only = {
    method: "GET",
    headers: {
      accept: "application/json",
      Authorization:
        "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzMGYzMDcwZmU3NGIzNWRkY2JjMTgwZWZmMTRmZTg0MyIsInN1YiI6IjYzNzViMDYxZmFiM2ZhMDBiNGNmZjNmZSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Xi-0Zhg8ZITEz84prkLphBBWZOr8YRrzMgy_I9V30e8",
    },
  };

  fetch(video_only,options_only)
  .then((resp)=>resp.json())
  .then((video)=>{
    const showvideo = document.getElementById("video");
    let videohtml ="";
    console.log(video.results[0].key)
    videohtml+=`<iframe width="560" height="315"
    src="https://www.youtube.com/embed/${video.results[0].key}?autoplay=0"
    title="YouTube video player" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    allowfullscreen></iframe>`

    showvideo.innerHTML=videohtml;

  })
  .catch((error) => console.error("Error: " + error));

