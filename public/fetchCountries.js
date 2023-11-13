// Replace 'your-api-endpoint' with the actual endpoint URL.
const apiURL = 'http://localhost:8000/api/v1/countries';

// If you're using authentication like Bearer tokens, add it to the headers
const headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  // 'Authorization': 'Bearer YOUR_TOKEN_HERE', // Uncomment this line if you're using token-based authentication
};

// Fetch data from the Laravel API
fetch(apiURL, { headers })
  .then(response => {
    if (!response.ok) {
      // If response is not OK, throw an error
      throw new Error(`HTTP error! Status: ${response.status}`);
    }
    return response.json(); // Parse JSON data from the response
  })
  .then(data => {

   const CountryValues = Object.values(data)
   //CountryValues.pop();
   CountryValues.pop()
   CountryValues.pop()
   console.log(CountryValues)
   HtmlContent = ''
   
   CountryValues.forEach(item => {

    item.forEach(item => {

   
        HtmlContent +=  `
        <tr>
          <td class="px-6 py-4 whitespace-no-wrap">
            <div class="flex items-center">
              <div class="ml-4">
              <div class="text-sm leading-5 font-medium text-gray-900">${item.abbr}</div>
              </div>
            </div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap">
              <div class="text-sm leading-5 text-gray-900">${item.countryName}</div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap">
              <div class="text-sm leading-5 text-gray-900">${item.region_id}</div>
            </td>
           
          </tr>
          `
      }
    )

})

   
    

   var jur = document.getElementById("jur")
   jur.innerHTML = HtmlContent
 
  })
  .catch(error => {
    // Handle any errors here
    console.error('There was an error fetching the data: ', error);
  });
