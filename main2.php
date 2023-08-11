<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <script>

        fetch("https://api.kakaobrain.com/v1/inference/kogpt/generation",{

            method: "POST",
            headers:{
                'Content-Type': 'application/json',
                'Authorization': 'KakaoAK fe00f14a16141f2f925f513a52aaca77' 
            },
            body:JSON.stringify({
                prompt: "오늘 아침 하늘은 곧 비가 올 것 같아서",
                max_tokens: 120,
                n: 2
            })
        })
        .then((res) => res.json())
        .then((data) => console.log(data))
        
        
    </script>
</body>
</html>