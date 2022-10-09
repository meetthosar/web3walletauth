console.log(11);
// import { loadStdlib } from "@reach-sh/stdlib";
// import { ALGO_MyAlgoConnect as MyAlgoConnect } from "@reach-sh/stdlib";
// const reach = loadStdlib();
//
// reach.setWalletFallback(reach.walletFallback({
//     providerEnv: 'TestNet', MyAlgoConnect }));
//
// const checkTheHead = async () => {
//     let promiseToRobTheTime = new Promise( async (startRobbing) => {
//
//         startRobbing();
//
//     });
//
//     promiseToRobTheTime.then(
//         async () => {console.log("In Promise");
//             const acc =  await reach.getDefaultAccount(reach.parseCurrency(1000));
//             // setAccount(acc);
//             // await getBalance(acc);
//             // const contrac = await acc.contract(backend, JSON.parse(contractInfo));
//             // setContract(contrac);
//             // // await getBalance(acc);
//             // rob(contrac);
//         }
//         // () => { console.log('Error'); }
//     ).catch(e => {
//         console.log(e.message);
//
//         // if(e.message.includes('Already')) setTimeUpMessage("You have already received the token");
//         // else setTimeUpMessage("Time up or List is full")
//     });
// }