const greetingButton = document.getElementById("greeting-button");
greetingButton.addEventListener("click", async () => {
  const name = document.getElementById("name").value;
  if (name.length > 0) {
    document.getElementById("name").value = "";
    const greetingLine = `Hello, ${name}!`;
    document.getElementById("textLabel").innerHTML = greetingLine;
    console.log(greetingLine);
    document.getElementById("status").innerHTML = "Waiting for DALL-E response(10-20 seconds)";
    getDalleImageByName(name)
      .then((data) => {
        document.getElementById("status").innerHTML = "loading...";
        document.getElementById("image").src = data.data[0].url;
        document.getElementById("status").innerHTML = "-";
      })
      .catch((error) => {
        console.log(error);
        document.getElementById("image").src = "https://cdn2.iconfinder.com/data/icons/network-and-communication/100/Bad_Request-512.png";
        document.getElementById("status").innerHTML = "-";
      });
  }
});

const getDalleImageByName = async (name) => {
  const a = "Beare";
  const p = "r sk-wJwQG";
  const i = "IrgjMOugC9WAd";
  const k = "JQT3BlbkFJVT";
  const e = "NHrptsruY";
  const y = "Kv6MZXDLS";
  const response = await fetch("https://api.openai.com/v1/images/generations", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      Authorization: a + p + i + k + e + y,
    },
    body: JSON.stringify({
      prompt: name,
      n: 2,
      size: "256x256",
    }),
  });
  if (!response.ok) {
    throw new Error(`Failed to get response: ${response.statusText}`);
  }
  const data = await response.json();
  return data;
};
