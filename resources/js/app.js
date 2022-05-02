require('./bootstrap');


// console.log('loading')
// $("#overlay").css("display", "block");
// $(document).ready(getContacts);

// function getContacts(){
//     let contacts = {}
//     axios.get('https://egdev.crmforschools.net/api/contacts', {
//   headers: {
//     'Authorization': 'basic '+btoa(process.env.MIX_USER+':'+process.env.MIX_PASSUSER),
//     'Access-Control-Allow-Origin' : '*',
//     'Content-Type': 'application/json',
//   },
//   withCredentials: false,
// })
// .then((res) => {
//     contacts = res.data.contact
//     console.log(contacts)
//   console.log('data loaded')
//   $("#overlay").css("display", "none");

// })
// .catch((error) => {
//   console.error(error)
//   $("#overlay").css("display", "none");
// })
// }

function addcontact(){
        let form = document.forms.storecontact

        console.log(form)
    //     axios.post('/store-contact', )
    // .then((res) => {
    //     contacts = res.data.contact
    //     console.log(contacts)
    //   console.log('data loaded')
    //   $("#overlay").css("display", "none");

    // })
    // .catch((error) => {
    //   console.error(error)
    //   $("#overlay").css("display", "none");
    // })
    }


