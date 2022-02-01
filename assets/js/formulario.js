fetch('https://api.redisoft.dev/Leads/web', {
  headers: {
    //'Content-type': 'application/json'
    'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
  },
  method: 'POST',
  mode: 'no-cors',
  body: "nombre=Carlos&correo=giles.carlos@iexe.edu.mx&telefono=+522226835059"
  })
  .then(function(response) {
    // Transforma la respuesta. En este caso lo convierte a JSON
    return response;
  })
  .then(function(json) {
    // Usamos la información recibida como necesitemos
    console.log(json)
  });

// const ajax = async function(url, data) {
//     try {
  
//       const response = await fetch(url, {
//         //credentials: 'include', // like jQuery $.ajax's `crossDomain`
//         method: 'post',
//         headers: {
//           'Accept': 'application/json',
//           'Content-Type': 'application/json',
//         },
//         mode: 'no-cors',
//         // this mimics how jQuery sends POST data as querystring by default
//         body: Object.entries(data).map(([key, val]) => `${key}=${val}`).join('&'),
//       });
  
//       data = await (
//         response.headers.get('content-type').includes('json')
//         ? response.json()
//         : response.text()
//       );
  
//       console.log(data);
  
//       return data;
//     } catch(err) { console.log(err) };
//   }
  
//   ajax('https://api.redisoft.dev/Leads/web', {
//     event_category: 'a', 
//     event_name: 'b', 
//     page_url: 'c',
//   });

// (async () => {
//     const rawResponse = await fetch('https://api.redisoft.dev/Leads/web', {
//       method: 'POST',
//       headers: {
//         'Accept': 'application/json',
//         'Content-Type': 'application/json'
//       },
//       mode: 'no-cors',
//       method: 'post',
//       body: JSON.stringify({a: 1, b: 'Textual content'})
//     });
//     const content = await rawResponse.json();
  
//     console.log(content);
//   })();