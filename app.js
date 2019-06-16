
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDsCabJN3QS49Xw_A8yVyyAs1W4qAmzRsQ",
    authDomain: "authentication-369.firebaseapp.com",
    databaseURL: "https://authentication-369.firebaseio.com",
    projectId: "authentication-369",
    storageBucket: "authentication-369.appspot.com",
    messagingSenderId: "167979943674"
  };
  firebase.initializeApp(config);
  var firestore = firebase.firestore();

  const docRef = firebase.collection("samples/sandwichData";)
  const outputheader = document.querySelector("#hotDogOutput");
  const inputTextField = document.querySelector("#latestHotDogStatus");
  const saveButton = document.querySelector("#saveButton");
  const loadButton = document.querySelector("#loadButton");

  saveButton.addEventList ner("click", function() {
    const textToSave = inputTextField.value;
    console.log("I am going to save " + textToSave + " to Firestore");
    docRef.set({
        hotDogStatus: textToSave
    }).then(function() {
      console.log("status saved!");
    }).catch(function (error) {
      console.log("Got an error:", error);

    });

    loadButton.addEventListener("click", function(){
      docRef.get().then(function (doc) {
        if (doc && doc.exists) {
          const myData = doc.data();
          outputHeader.innerText = "Hot dog status: " + myData.hotDogStatus;
        }
      }).catch(function (error) {
        console.log(" Got an error: ", error);
      }

    });

  });
