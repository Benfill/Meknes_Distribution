import Cookies from "js-cookie";

const API_URL = import.meta.env.VITE_REACT_APP_API_URL;

async function POST(endpoint, body) {
  // body : Object
  const token = Cookies.get("token");
  const response = await fetch(API_URL + endpoint, {
    headers: {
      "Content-Type": "application/json",
      Authorization: "Bearer " + token,
    },
    method: "POST",
    body: JSON.stringify(body),
  });

  if (response.ok) {
    return await response.json();
  } else {
    return null;
  }
}

export default POST;
