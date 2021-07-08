import https from "https";
import fs from "fs";
const getToken = (req, res) => {
  const authData = JSON.parse(req.body.data);

  const data = JSON.stringify({
    client_id: authData.client_id,
    client_secret: authData.client_secret,
    grant_type: `${process.env.GRANT_TYPE}`,
    code: authData.code,
    redirect_uri: authData.redirect_uri,
  });
  const options = {
    hostname: "marketingmcpr.amocrm.ru",
    port: 443,
    path: "/oauth2/access_token",
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      // 'Content-Length': data.length,
      "User-Agent": "amoCRM-oAuth-client/1.0",
    },
  };
  {
    const req = https.request(options, (res) => {
      console.log(`statusCode: ${res.statusCode}`);

      res.on("data", (d) => {
        process.stdout.write(d);
        if (res.statusCode == 200) {
          fs.writeFileSync("./utils/amo_token.json", d.toString());
        }
      });
    });

    req.on("error", (error) => {
      console.error(error);
    });
    req.write(data);
    req.end();
  }
};
export default getToken;
