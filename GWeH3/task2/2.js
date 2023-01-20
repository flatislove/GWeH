function greeting() {
  const name = document.getElementById("name").value;
  if (name.length > 0) {
    document.getElementById("name").value = "";
    const greetingLine = `Hello, ${name}!`
    document.getElementById("textLabel").innerHTML = greetingLine;
    console.log(greetingLine);
    document.getElementById("status").innerHTML = "Waiting for DALL-E response";
    getDalleImageByName(name);
  }
}

function getDalleImageByName(name) {
  fetch("https://api.openai.com/v1/images/generations", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "Authorization": "Bearer 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"
    },
    body: JSON.stringify(
      {
        "prompt": name,
        "n": 2,
        "size": "256x256"
      }
    )
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      document.getElementById("status").innerHTML = "loading...";
      document.getElementById("image").src = data.data[0].url;
      document.getElementById("status").innerHTML = "-";
    })
    .catch(function (error) {
      console.log(error);
      document.getElementById("image").src = "https://cdn2.iconfinder.com/data/icons/network-and-communicaion/100/Bad_Request-512.png";
      document.getElementById("status").innerHTML = "-";
    });
}

