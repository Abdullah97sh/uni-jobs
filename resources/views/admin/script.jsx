function ContactForm({ name, nameError = false, contact, email, emailError = false, emailError2 = false, message,
  messageError, formValid = false }) {

  function isValidEmail(email) {
    return /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[A-Za-z]+$/.test(email);
  }

  // isValidcontact(contactno) {
  //   return /^[6-9]\d{9}$/.test(contactno);
  // }  

  function handleBlur(e) {

    const name = e.target.name;
    const value = e.target.value;

    this.setState({ [name]: value });

    if (value.length <= 0 && name == 'name') {
      this.setState({ nameError: true });
    } else {
      this.setState({ nameError: false });
    }

    if (value.length <= 0 && name == 'email') {
      this.setState({ emailError: true });
      this.setState({ emailError2: false });
    } else {
      this.setState({ emailError: false });
      if (this.isValidEmail(value)) {
        this.setState({ emailError2: false });
      } else {
        this.setState({ emailError2: true });
      }
    }

  }

  function handleChange(e) {
    this.setState({ [e.target.name]: e.target.value });
  }

  function handleSubmit(e) {
    const { name, email, message, nameError, emailError, emailError2, messageError } = this.state;

    this.setState({ nameError: name ? false : true });
    this.setState({ messageError: message ? false : true });
    this.setState({ emailError: email ? false : true });
    if (email && !emailError) { this.setState({ emailError2: this.isValidEmail(email) ? false : true }); }


    if (name && email && message && !nameError && !emailError && !emailError2 && !messageError) {
      this.setState({ formValid: true });
    } else {
      this.setState({ formValid: false });
    }

    e.preventDefault();
  }



  if (!formValid) {

    return /*#__PURE__*/(
      React.createElement(React.Fragment, null, /*#__PURE__*/
        React.createElement("div", { className: "card shadow-sm border-0 px-3 rounded-2 mb-3 py-4 mx-auto mt-5 bg-light" }, /*#__PURE__*/
          React.createElement("div", { className: "card-header bg-transparent border-0 text-center text-uppercase" }, /*#__PURE__*/React.createElement("h3", null, this.props.title)), /*#__PURE__*/
          React.createElement("div", { className: "card-body" }, /*#__PURE__*/
            React.createElement("form", { action: "/", onSubmit: e => this.handleSubmit(e), encType: "multipart/form-data", autoComplete: "off" }, /*#__PURE__*/
              React.createElement("div", { className: "form-group" }, /*#__PURE__*/
                React.createElement("label", { className: "mb-0" }, "Your name", /*#__PURE__*/React.createElement("span", { className: "text-danger" }, "*")), /*#__PURE__*/
                React.createElement("input", { name: "name", type: "text", className: "form-control", placeholder: "Name", value: this.state.name, onChange: this.handleChange, onBlur: this.handleBlur }),
                nameError ? /*#__PURE__*/
                  React.createElement("div", { className: "alert alert-danger mt-2" }, "Name is a required field.") :
                  ''), /*#__PURE__*/


              React.createElement("div", { className: "form-group" }, /*#__PURE__*/
                React.createElement("label", { className: "mb-0" }, "Your email", /*#__PURE__*/React.createElement("span", { className: "text-danger" }, "*")), /*#__PURE__*/
                React.createElement("input", { name: "email", type: "email", className: "form-control", placeholder: "Email", value: this.state.email, onChange: this.handleChange, onBlur: this.handleBlur }),
                emailError ? /*#__PURE__*/
                  React.createElement("div", { className: "alert alert-danger mt-2" }, "Email is a required field.") :
                  '',

                emailError2 ? /*#__PURE__*/
                  React.createElement("div", { className: "alert alert-danger mt-2" }, "Email invalid.") :
                  ''), /*#__PURE__*/


              React.createElement("div", { className: "form-group" }, /*#__PURE__*/
                React.createElement("label", { className: "mb-0" }, "Your contact number (Optional)"), /*#__PURE__*/
                React.createElement("input", { name: "contact", type: "text", className: "form-control", placeholder: "Contact", onChange: this.handleChange, value: this.state.contact })), /*#__PURE__*/

              React.createElement("div", { className: "form-group" }, /*#__PURE__*/
                React.createElement("label", { className: "mb-0" }, "Message", /*#__PURE__*/React.createElement("span", { className: "text-danger" }, "*")), /*#__PURE__*/
                React.createElement("textarea", { name: "message", type: "text", className: "form-control", placeholder: "Message", value: this.state.message, onChange: this.handleChange, onBlur: this.handleBlur }),
                messageError ? /*#__PURE__*/
                  React.createElement("div", { className: "alert alert-danger mt-2" }, "Message is a required field.") :
                  ''), /*#__PURE__*/


              React.createElement("p", { className: "text-center mb-0" }, /*#__PURE__*/React.createElement("input", { type: "submit", className: "btn btn-primary btn-lg w-100 text-uppercase", value: "Submit Now" }))))), /*#__PURE__*/




        React.createElement("p", { className: "text-center" }, /*#__PURE__*/React.createElement("a", { href: "https://codematra.com/how-to-create-a-contact-form-in-react-js-using-bootstrap-with-validation/" }, "Learn To Create Contact Form"))));


  } else {
    return /*#__PURE__*/(
      React.createElement("div", { className: "thankyou_details" }, /*#__PURE__*/
        React.createElement("div", { className: "alert alert-success mt-3" }, "Mail sent successfully.")));


  }

}


