onload = fetch("./human_lungs_subtype.csv").then(res => {
    return res.text()
}).then(data => {
    let result = data.split(/\r?\n|\r/).map
    (e => {
        return e.split(",")
    })
    result.forEach(e => {
        let m = e.map( e => {
            return `<td>${e}</td>`;
        }).join(" ")
        let ce = document.createElement("tr");
        ce.innerHTML = m;
        document.querySelector("table").appendChild(ce);
        console.log(m);
    })

})