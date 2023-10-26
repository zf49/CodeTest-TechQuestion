### 1. We manage server, CMS and front-end. If the client rings you and says “Website is loading slow” where will you start from to find the solution? (Front-end doesn’t show any error)

a.    Front-end

b.    Server

c.    CMS

d.    API

If there are no errors on the front-end, I would start by checking the back-end (b), looking through the logs to see if any bugs have occurred. Next, I would check the API, as the slow loading might also be due to issues with the API. Following that, I would check the front-end for any bugs. There might be a large number of requests being made, or some large files being loaded, etc. Lastly, I would check the content on the CMS.

### 2. While setting up the email address with custom domain, where do you put the MX records? (the domain is hosted in with some other provider)

a.    At email provider

b.    At domain provider

For custom domains, such as company, school, etc., the MX will be placed with (b) the domain provider. For example, I have a domain name chris.com, but I am going to use outlook as the email provider. make the relevant settings in the domain provider and verify the settings in outlook.

While setting up the email address with custom domain, where do you put the MX records? (the domain is hosted in with some other provider)

### 3. What is responsive web design, and how do you make a website responsive using CSS techniques?

RWD is the design that enables a page to be adapted to devices with different resolutions. CSS can use @media to implement. Some size settings can be set in % instead of px. Some frameworks, such as MUI, can use the Grid as a base component to implement responsive layouts.

### 4. Explain the difference between null and undefined in JavaScript. When would you use one over the other?

`undefined` indicates that a variable has been declared but not yet assigned a value, or that a property on the object does not exist.

```html
var a;
console.log(a) // => undefined
var b = ["1","2"];
console.log(b[3]) //=>undefiend
```

`null` used to indicate missing or null values.

```html
var a = null; 
```

### 5. How does asynchronous programming work in JavaScript, and what are common techniques for handling asynchronous tasks?

Async in JS is implemented loops or callback functions that allow other methods to be executed while waiting for an async function to complete.

```js
var getData = async()=>{
  await axios.get("localhost:8080/123").thne((res)=>{
    	console.log(res)
  })
}
```

In react, useEffect is always be used to deal with async function, like fetch data.

### 6. What are the main differences between React and Angular? When would you choose one over the other for a project?

These are two of the three main front-end frameworks (Vue, React and Angular). I've worked more with React and Vue and less with Angular. As far as I know, React has more third-party libraries than Angular, and generally enterprise-level projects prefer Angular and React to Vue. Moreover, React is less SEO-friendly because React is client-side rendering, and 2C products are rarely developed with React.

### 7.  Explain the importance of using HTTPS (SSL/TLS) for web applications and how you would set it up.

Https is safer than http, and protects data better. Https uses SSL/TLS certificates to check the server's identity and ensure communication. Usually in development Env, http is used, but when the project is launched, the protocol is switched to https. In backend development like with the .net framework, both protocol addresses are already set in the config file. Typically before launch, http requests are redirected to https to make sure access is secure.



