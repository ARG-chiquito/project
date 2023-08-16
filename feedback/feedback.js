// .box .task
const name1= document.getElementById("name");
const feedback = document.getElementById("feedback");
const form = document.querySelector("form");
const container = document.querySelector(".container");


let feed = localStorage.getItem("feed")? JSON.parse(localStorage.getItem("feed")) : [];

showValue();
function showValue(){
    feed.forEach((val, idx)=>{
        let box = document.createElement("div");
        box.setAttribute("class", "box");

        let task = document.createElement("div");
        task.setAttribute("class", "task");

        box.append(task);

        let innerdiv = document.createElement("div");
        let p = document.createElement("p");  
        p.innerText = val.name;
        let span = document.createElement("span");
        span.innerText = val.feedback;

        innerdiv.append(p);
        innerdiv.append(span);

        task.append(innerdiv);

        let dltbtn = document.createElement("button");
        dltbtn.setAttribute("class", "dltbtn");
        dltbtn.innerText = "-";

        task.append(dltbtn)

        container.append(box);

        // deleting feedback

        dltbtn.addEventListener("click", ()=>{
            removeprev();
            feed.splice(idx, 1);
            localStorage.setItem("feed", JSON.stringify(feed));
            showValue();
        })
        
        //*********/
        
    })
}

function removeprev(){
    feed.forEach(()=>{
        const d = document.querySelector(".task");
        d.remove();
    })
}

form.addEventListener("submit", (e)=>{
    e.preventDefault();
    // window is showing previous content, so remove previous
    removeprev();
    //
    feed.push({
        name: name1.value,
        feedback : feedback.value
    });
    name1.value = "";
    feedback.value= "";

    console.log(feed);
    localStorage.setItem("feed", JSON.stringify(feed));
    
    showValue();
    
})
