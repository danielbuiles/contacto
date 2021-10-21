<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/indexStyle.css">
    <title>DBG Contacto</title>
</head>
<body>
    <div class="container">
        <header class="header">
          <h1 id="title" class="text-center">Contacto DBG</h1>
          <p id="description" class="description text-center">
            Gracias por tomarse el tiempo para hablar conmigo
          </p>
        </header>
        <form id="survey-form" method="POST" action="./controllers/indexController.php">
          <div class="form-group">
            <label id="name-label" for="name">Nombre</label>
            <input
              type="text"
              name="name"
              id="name"
              class="form-control"
              placeholder="digita tu nombre"
              required
            />
          </div>
          <div class="form-group">
            <label id="email-label" for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control"
              placeholder="digita tu Email"
              required
            />
          </div>
          <div class="form-group">
            <p>enfoque del proyecto a realizar?</p>
            <select id="dropdown" name="enfoque" class="form-control" required>
              <option disabled selected value>Selecciona un tipo de proyecto</option>
              <option value="web">Diseño Web</option>
              <option value="backend">Desarrollo Backend</option>
              <option value="api">API</option>
              <option value="analisis">Analisis de Datos</option>
              <option value="seguridad">Seguridad informatica</option>
              <option value="ai">Machine Learning</option>
              <option value="otro">Otro</option>
            </select>
          </div>
      
          <div class="form-group">
            <p>tiene en mente todas las especificaciones que desea?</p>
            <label>
              <input
                name="especificaciones"
                value="definitivamente"
                type="radio"
                class="input-radio"
                checked
              />Definitivamente</label
            >
            <label>
              <input
                name="especificaciones"
                value="parte"
                type="radio"
                class="input-radio"
              />una parte</label
            >
      
            <label
              ><input
                name="especificaciones"
                value="no"
                type="radio"
                class="input-radio"
              />No</label
            >
          </div>
      
          <div class="form-group">
            <p>algun comentario o sugestion?</p>
            <textarea
              id="comments"
              class="input-textarea"
              name="comentario"
              placeholder="Escribe tu comentario aqui..."
            ></textarea>
          </div>
      
          <div class="form-group">
            <button type="submit" id="submit" class="submit-button" name="btn">
              Enviar
            </button>
          </div>
        </form>
      </div>
</body>
</html>