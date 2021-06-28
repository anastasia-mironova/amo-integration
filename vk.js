import { buildQueryString, callApi } from "./helper.js"; // импортируем наших помощников.

import addUniqueCampaigns from "./addUniqueCampaign.js";

const scopes = ["ads"]; // рамки того, что мы будем запрашивать

// создаем url, который перенаправит нас на вк авторизацию

const vKAuthFirstStep = (res) => {
  const url = `https://oauth.vk.com/authorize${buildQueryString([
    { client_id: process.env.VK_APP_ID },
    { redirect_uri: "https://localhost:3000/login/vk/complete" },
    { display: "popup" },
    { scope: scopes.join("+") },
    { response_type: "code" },
    { state: "auth" },
    { v: "5.131" },
  ])}`;

  res.redirect(url);
};

const vkLoginComplete = async (req, res) => {
  const code = req.query["code"] || "";

  console.log(req.query["code"]);
  if (!code) {
    console.debug("Cannot authorize no code");

    return res.send("Cannot authorize no code");
  }

  const getAccessToken = async (code) => {
    const url = `https://oauth.vk.com/access_token${buildQueryString([
      { client_id: process.env.VK_APP_ID },

      { client_secret: process.env.VK_CLIENT_SECRET },

      { redirect_uri: "https://localhost:3000/login/vk/complete" },
      { code: code },
    ])}`;
    const access_token = await callApi("post", url);
    console.log(access_token);
    return {
      access_token,
    };
  };
  const data = await getAccessToken(String(code));

  if (!data.access_token) {
    console.debug("Unable to get access token");

    return res.send("Unable to get access token");
  }

  //const campaignsInfo = await getCampaignsInfo(data.access_token);
  const campaignsInfo = await getCampaignsInfo(
    "4dd066663361890aad5410a0ddef9ded1529ac04ff43035b71f2f43de6cbeddc00b81f59ea0716a76890d",
    "1606366398"
  );
  console.debug("Successfully got information about authorized user");

  // campaignsInfo.data.response
  // addUniqueCampaigns (el['name']
  const campaigns = campaignsInfo.data.response;

  for (let index = 0; index < campaigns.length; index++) {
    addUniqueCampaigns(campaigns[index]["name"]);
  }

  return res.send(
    `Successfully got information about campaign ${JSON.stringify(
      campaignsInfo.data.response
    )}`
  );
};

const getCampaignsInfo = async (accessToken, accountId) => {
  const data = await callApi(
    "post",

    `https://api.vk.com/method/ads.getCampaigns${buildQueryString([
      { access_token: accessToken },
      { account_id: accountId },
      { include_deleted: 0 },
    ])}&v=5.131`
  );

  const { id, name, status } = data;
  console.log(data);

  return {
    data,
  };
};
export { vKAuthFirstStep, vkLoginComplete };
