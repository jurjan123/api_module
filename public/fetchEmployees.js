// Replace 'your-api-endpoint' with the actual endpoint URL.
const apiURL = 'http://localhost:8000/api/v1/employees';

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

   const employeeValues = Object.values(data)
   employeeValues.pop();
   console.log(employeeValues)
   HtmlContent = ''
   
   employeeValues.forEach(item => {
    console.log(item[0])
   
    item.forEach(item => {
      
        HtmlContent +=  `
        <tr>
          <td class="px-6 py-4 whitespace-no-wrap">
            <div class="flex items-center">
              <div class="ml-4">
              <div class="text-sm leading-5 font-medium text-gray-900">${item.firstName}</div>
              </div>
            </div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap">
              <div class="text-sm leading-5 text-gray-900">${item.lastName}</div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap">
              <div class="text-sm leading-5 text-gray-900">${item.email}</div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap">
              <span class="px-2 inline-flex text-xs leading-5 font-semibold bg-green-100 text-green-800">
              ${item.phoneNumber}
              </span>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap">
            <div class="text-sm leading-5 text-gray-900">${item.hireDate}</div>
          </td>
          <td class="px-6 py-4 whitespace-no-wrap">
              <div class="text-sm leading-5 text-gray-900">${item.salary}</div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap">
              <div class="text-sm leading-5 text-gray-900">${item.job_id}</div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap">
              <div class="text-sm leading-5 text-gray-900">${item.manager_id}</div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap">
              <div class="text-sm leading-5 text-gray-900">${item.department_id}</div>
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
