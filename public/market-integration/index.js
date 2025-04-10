const { CampaignsApi } = require('./dist');

const campaignsApi = new CampaignsApi();
campaignsApi.apiClient.authentications['ApiKey'].apiKey = 'ACMA:XQ7wOVeqcp92MkZ3H5vOYE1XqIkIeaEsPNdOU2bm:23f3d992';

campaignsApi.getCampaigns(undefined, function (error, data) {
    console.log(JSON.stringify(data, null, 4));
});