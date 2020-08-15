// require('./bootstrap');

require('./config');
require('./components_scripts');

require('./page_specific');


new autoComplete({
    data: {                              // Data src [Array, Function, Async] | (REQUIRED)
      src: async () => {
        // API key token
        // const token = "this_is_the_API_token_number";
        // User search query
        const query = document.querySelector("#autoComplete").value;
        // Fetch External Data Source
        const source = await fetch(`/get_test_data`);
        // Format data into JSON
        const data = await source.json();
        // Return Fetched data
        console.log("in data");
        console.log(data);
        return data;
      },
      key: ["food", "cities", "animals"],
      cache: false
    },
    // query: {                               // Query Interceptor               | (Optional)
    //       manipulate: (query) => {
    //         console.log("in query");
    //         return query.replace("pizza", "burger");
    //       }
    // },
    sort: (a, b) => {
        console.log("in sort");       // Sort rendered results ascendingly | (Optional)
        if (a.match < b.match) return -1;
        if (a.match > b.match) return 1;
        return 0;
    },
    placeHolder: "Food & Drinks...",     // Place Holder text                 | (Optional)
    selector: "#autoComplete",           // Input field selector              | (Optional)
    threshold: 0,                        // Min. Chars length to start Engine | (Optional)
    debounce: 300,                       // Post duration for engine to start | (Optional)
    searchEngine: "loose",              // Search Engine type/mode           | (Optional)
    resultsList: {
                    // Rendered results list object      | (Optional)
        render: true,
        /* if set to false, add an eventListener to the selector for event type
           "autoComplete" to handle the result */
        container: source => {
            console.log("in result list container");
            source.setAttribute("id", "food_list");
        },
        destination: document.querySelector("#autoComplete"),
        position: "afterend",
        element: "ul"
    },
    maxResults: 5,                         // Max. number of rendered results | (Optional)
    highlight: true,                       // Highlight matching results      | (Optional)
    resultItem: {                          // Rendered result item            | (Optional)
        content: (data, source) => {
            console.log("in result item > content");
            source.innerHTML = data.match;
        },
        element: "li"
    },
    noResults: () => {
        console.log("in no results");  // Action script on noResults      | (Optional)
        const result = document.createElement("li");
        result.setAttribute("class", "no_result");
        result.setAttribute("tabindex", "1");
        result.innerHTML = "No Results";
        document.querySelector("#autoComplete_list").appendChild(result);
    },
    onSelection: feedback => {
        console.log("in on selection");            // Action script onSelection event | (Optional)
        console.log(feedback.selection.value.image_url);
    }
});

// {
//     trigger: new FormValidation.plugins.Trigger(),
//     // Bootstrap Framework Integration
//     bootstrap: new FormValidation.plugins.Bootstrap(),
//     // Validate fields when clicking the Submit button
//     submitButton: new FormValidation.plugins.SubmitButton(),
//                                     // Submit the form when all fields are valid
//     defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
// }

