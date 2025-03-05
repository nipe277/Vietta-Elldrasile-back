async function getPosts(){
    let res = await fetch('methods/contentReturner.php');
    let posts = await res.json();
}