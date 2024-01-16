// ========================================

// ========================================
calculateFactorial = function(f){
    let fact = 1;
    for(let i=1; i<=f; i++){
        fact = fact*i
    }
    return fact
}


console.log(calculateFactorial(1))