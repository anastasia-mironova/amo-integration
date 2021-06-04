import axios from  'axios'



 const callApi = async (method,url, payload = null) => {
    try {
        const payloadString = payload !== null ? JSON.stringify(payload) : null;
        const rc = {
            url,
            headers: {
                Accept: 'application/json',
            },
            method,
        };
        if (payloadString) {
            rc.data = payloadString;
            rc.headers['Content-Type'] = 'application/json; charset=UTF-8';
        }
        const result = await axios(rc).then(
            (r) => ({ data: r.data, status: r.status }),
            (e) => ({ status: e.response.status, error: e.response.data.error })
        );
        if (!result) {
            console.log('kdkdk')
            return {};
        }
        if (result.status === 400) {
            const errMessage = result.error.message;
            if (errMessage) {
                console.error(errMessage);
                console.log('kdkdk2')
                return {};
            }
            console.log('kdkdk3')
            return {};
        }
        return result.data;
    } catch (error) {
        console.error('fetch api error', error);
        console.log('kdkdk4')
        return {};
    }
};
const buildQueryString = (items) => {
    const joined = items
      .map((it) => {
        const key = Object.keys(it)[0];
        return `${key}=${encodeURI(it[key])}`;
      })
      .join('&');
    return joined.length > 0 ? '?' + joined : '';
  }
  export  { callApi, buildQueryString}