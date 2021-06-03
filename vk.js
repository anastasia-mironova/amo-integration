import { buildQueryString, callApi } from './helper.js'; // импортируем наших помощников.



const scopes = ['ads']; // рамки того, что мы будем запрашивать



// создаем url, который перенаправит нас на вк авторизацию

exports.vKAuthFirstStep = (res) => {

  const url = `https://oauth.vk.com/authorize${buildQueryString([

    { client_id: process.env.VK_APP_ID },

    { redirect_uri: 'https://localhost:3000/login/vk/complete' },

    { response_type: 'code' },

    { scope: scopes.join('+') },

    { state: '{}' },
    { v: '5.131' },

  ])}`;

  res.redirect(url);

};

exports.vkLoginComplete = async (req, res) => {



  const code = req.query['code'] || '';

  if (!code) {

    console.debug('Cannot authorize no code')

    return res.send('Cannot authorize no code');

  };

  const data = await getAccessToken(String(code));

  if (!data.access_token) {

    console.debug('Unable to get access token')

    return res.send('Unable to get access token');

  }



  const campaignsInfo = await getCampaignsInfo(data.access_token);



  console.debug('Successfully got information about authorized user');

  return res.send(`Successfully got information about authorized user ${JSON.stringify(campaignsInfo)}`)

};



const getAccessToken = async (code) => {

  const { email, access_token, user_id } = await callApi(

    'post',

    `https://oauth.vk.com/access_token${buildQueryString([

      
      { client_id: process.env.VK_APP_ID },

      { client_secret: process.env.VK_APP_SECRET },

      { redirect_uri: 'https://localhost:3000/login/vk/complete' },
      { code: code }


    ])}`

  );

  return {

    email,

    access_token,

    user_id,

  };

};



const getCampaignsInfo = async (accessToken) => {

  const data = await callApi(

    'post',

    `https://api.vk.com/method/ads.getCampaigns${buildQueryString([

      { access_token: accessToken },

      { fields: ['screen_name', 'nickname'].join(',') },

    ])}&v=5.103`

  );

  const { id, name, status } = data.response[0];

  return {

    id: id,

    name: name,
    status: status

  };

};
