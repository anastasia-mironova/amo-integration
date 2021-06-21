import addUniqueCampaigns from "./addUniqueCampaign.js";
import { GoogleAdsApi } from "google-ads-api";
import { enums } from "google-ads-api";
async function getGoogleCampaign() {
  const client = new GoogleAdsApi({
    client_id:
      "466980095499-oab6des535r84c9vioegnnp6r21pmmbg.apps.googleusercontent.com",
    client_secret: "7u844_RqnI0RHsG0U-DUjVBw",
    developer_token: "0Co-7r8hMgfuJRC5rppecA",
  });

  const customer = client.Customer({
    customer_id: "2405709396",
    // customer_account_id: '113-160-3923',
    login_customer_id: "1131603923", // Optionally provide a login-customer-id
    // linked_customer_id: '789-789-789', // Optionally provide a linked-customer-id
    refresh_token:
      "1//04iUtI2btg5czCgYIARAAGAQSNgF-L9IrQ2J9h5RnW_8y_ggHmx3s0ByU7JLZ8foV2TIza2LJS3mTlCSw37IGPt71uHvWPkOP9A",
  });

  const campaigns = await customer.report({
    entity: "campaign",
    attributes: ["campaign.id", "campaign.name"],
    constraints: {
      "campaign.status": enums.CampaignStatus.ENABLED,
    },
    limit: 20,
  });
  campaigns.forEach((element) => {
    addUniqueCampaigns(element["campaign"]["name"]);
  });
}

export { getGoogleCampaign };
